"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.deactivate = exports.activate = void 0;
const path = require("path");
const fs = require("fs");
const vscode_1 = require("vscode");
const vscode_languageclient_1 = require("vscode-languageclient");
let defaultClient;
let clients = new Map();
let _sortedWorkspaceFolders;
function sortedWorkspaceFolders() {
    if (_sortedWorkspaceFolders === void 0) {
        _sortedWorkspaceFolders = vscode_1.workspace.workspaceFolders.map(folder => {
            let result = folder.uri.toString();
            if (result.charAt(result.length - 1) !== '/') {
                result = result + '/';
            }
            return result;
        }).sort((a, b) => {
            return a.length - b.length;
        });
    }
    return _sortedWorkspaceFolders;
}
vscode_1.workspace.onDidChangeWorkspaceFolders(() => _sortedWorkspaceFolders = undefined);
function getOuterMostWorkspaceFolder(folder) {
    let sorted = sortedWorkspaceFolders();
    for (let element of sorted) {
        let uri = folder.uri.toString();
        if (uri.charAt(uri.length - 1) !== '/') {
            uri = uri + '/';
        }
        if (uri.startsWith(element)) {
            return vscode_1.workspace.getWorkspaceFolder(vscode_1.Uri.parse(element));
        }
    }
    return folder;
}
function activate(context) {
    let module = context.asAbsolutePath(path.join('server', 'server.js'));
    // let module = context.asAbsolutePath(path.join('../server', 'out/server.js'));
    let outputChannel = vscode_1.window.createOutputChannel('small-ci');
    function didOpenTextDocument(document) {
        // We are only interested in language mode text
        if (document.languageId !== 'php' || document.uri.scheme !== 'file') {
            return;
        }
        let uri = document.uri;
        let folder = vscode_1.workspace.getWorkspaceFolder(uri);
        // Files outside a folder can't be handled. This might depend on the language.
        // Single file languages like JSON might handle files outside the workspace folders.
        if (!folder) {
            return;
        }
        // If we have nested workspace folders we only start a server on the outer most workspace folder.
        folder = getOuterMostWorkspaceFolder(folder);
        const system = vscode_1.workspace.getConfiguration().get('CI.system');
        try {
            fs.accessSync(`${folder.uri.fsPath}/${system}`);
        }
        catch (error) {
            outputChannel.appendLine('No system folder found! Exit!');
            return;
        }
        if (!clients.has(folder.uri.toString())) {
            let debugOptions = { execArgv: ["--nolazy", `--inspect=${6011 + clients.size}`] };
            let serverOptions = {
                run: { module, transport: vscode_languageclient_1.TransportKind.ipc },
                debug: { module, transport: vscode_languageclient_1.TransportKind.ipc, options: debugOptions }
            };
            let clientOptions = {
                documentSelector: [{ scheme: 'file', language: 'php' }],
                synchronize: {
                    configurationSection: 'CI',
                    // Notify the server about file changes to '.clientrc files contain in the workspace
                    fileEvents: vscode_1.workspace.createFileSystemWatcher('**/.clientrc')
                },
                diagnosticCollectionName: 'small-ci',
                workspaceFolder: folder,
                outputChannel: outputChannel
            };
            let client = new vscode_languageclient_1.LanguageClient('small-ci', serverOptions, clientOptions, true);
            let item = null;
            client.registerProposedFeatures();
            client.start();
            client.onReady()
                .then(() => {
                client.onNotification('showStatus', () => {
                    if (!item) {
                        item = vscode_1.window.createStatusBarItem();
                    }
                    item.text = 'small-CI initing...';
                    item.show();
                });
                client.onNotification('hideStatus', () => {
                    if (!item)
                        return;
                    item.text = 'small-CI init done';
                    setTimeout(() => {
                        item.hide();
                    }, 5000);
                });
            });
            clients.set(folder.uri.toString(), client);
        }
    }
    vscode_1.workspace.onDidOpenTextDocument(didOpenTextDocument);
    vscode_1.workspace.textDocuments.forEach(didOpenTextDocument);
    vscode_1.workspace.onDidChangeWorkspaceFolders((event) => {
        for (let folder of event.removed) {
            let client = clients.get(folder.uri.toString());
            if (client) {
                clients.delete(folder.uri.toString());
                client.stop();
            }
        }
    });
}
exports.activate = activate;
function deactivate() {
    let promises = [];
    if (defaultClient) {
        promises.push(defaultClient.stop());
    }
    for (let client of clients.values()) {
        promises.push(client.stop());
    }
    return Promise.all(promises).then(() => undefined);
}
exports.deactivate = deactivate;
//# sourceMappingURL=extension.js.map