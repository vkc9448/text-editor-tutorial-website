<?php
    //<p><b><code></code></b> - </p>
    /*
        <h4>Properties</h4>
        <hr>
    */
    $content = array(
            
            "Range" =>
            "<p>Range represents a region in a buffer in row/column coordinates.</p>
            <h4>Properties</h4>
            <hr>
            <p><b><code>::start</code></b> - A Point representing the start of the Range.</p>
            <p><b><code>::end</code></b> - A Point representing the end of the Range.</p>
            <h4>Construction</h4>
            <hr>
            <p><b><code>.fromObject(object, copy)</code></b> - Convert any range-compatible object to a Range.</p>
            <p><b><code>::constructor(pointA, pointB)</code></b> - Construct a Range object</p>
            <p><b><code>::copy()</code></b> - Returns a new range with the same start and end positions.</p>
            <p><b><code>::negate()</code></b> - Returns a new range with the start and end positions negated.</p>
            <h4>Serialization and Deserialization</h4>
            <hr>
            <p><b><code>.deserialize(array)</code></b> - Call this with the result of Range::serialize to construct a new Range</p>
            <p><b><code>::serialize()</code></b> - Returns a plain javascript object representation of the range.</p>
            <h4>Range Details</h4>
            <hr>
            <p><b><code>::isEmpty()</code></b> - Is the start position of this range equal to the end position?</p>
            <p><b><code>::isSingleLine()</code></b> - Returns a Boolean indicating whether this range starts and ends on the same row.</p>
            <p><b><code>::getRowCount()</code></b> - Get the number of rows in this range.</p>
            <p><b><code>::getRows()</code></b> - Returns an array of all rows in the range.</p>
            <h4>Operations</h4>
            <hr>
            <p><b><code>::freeze()</code></b> - Freezes the range and its start and end point so it becomes immutable and returns itself.</p>
            <p><b><code>::union(otherRange)</code></b> - Returns a new range that contains this range and the given range.</p>
            <p><b><code>::translate(startDelta, [endDelta])</code></b> - Build and return a new range by translating this range's start and end points by the given delta(s).</p>
            <p><b><code>::traverse(delta)</code></b> - Build and return a new range by traversing this range's start and end points by the given delta.
            </p>
            <h4>Comparison</h4>
            <hr>
            <p><b><code>::compare(otherRange)</code></b> - Compare two Ranges</p>
            <p><b><code>::isEqual(otherRange)</code></b> - Returns a Boolean indicating whether this range has the same start and end points as the given Range or range-compatible Array.</p>
            <p><b><code>::coversSameRows(otherRange)</code></b> - Returns a Boolean indicating whether this range starts and ends on the same row as the argument.</p>
            <p><b><code>::intersectsWith(otherRange, [exclusive])</code></b> - Determines whether this range intersects with the argument.</p>
            <p><b><code>::containsRange(otherRange, exclusive)</code></b> - Returns a Boolean indicating whether this range contains the given range.</p>
            <p><b><code>::containsPoint(point, exclusive)</code></b> - Returns a Boolean indicating whether this range contains the given point.</p>
            <p><b><code>::intersectsRow(row)</code></b> - Returns a Boolean indicating whether this range intersects the given row Number.</p>
            <p><b><code>::intersectsRowRange(startRow, endRow)</code></b> - Returns a Boolean indicating whether this range intersects the row range indicated by the given startRow and endRow Numbers.</p>
            <h4>Conversion</h4>
            <hr>
            <p><b><code>::toString()</code></b> - Returns a string representation of the range.</p>",


            "Text Editor" =>
            "<p>TextEditor represents all essential editing state for a single TextBuffer, including cursor and selection positions, folds, and soft wraps. If you\'re manipulating the state of an editor, use this class.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::onDidChangeTitle(callback)</code></b> - Calls your callback when the buffer's title has changed.</p>
            <p><b><code>::onDidChangePath(callback)</code></b> -Calls your callback when the buffer's path, and therefore title, has changed. </p>
            <p><b><code>::onDidChange(callback)</code></b> - Invoke the given callback synchronously when the content of the buffer changes.</p>
            <p><b><code>::onDidStopChanging(callback)</code></b> - Invoke callback when the buffer's contents change. It is emit asynchronously 300ms after the last buffer change. This is a good place to handle changes to the buffer without compromising typing performance.</p>
            <p><b><code>::onDidChangeCursorPosition(callback)</code></b> - Calls your callback when a Cursor is moved. If there are multiple cursors, your callback will be called for each cursor.</p>
            <p><b><code>::onDidChangeSelectionRange(callback)</code></b> - Calls your callback when a selection's screen range changes.</p>
            <p><b><code>::onDidSave(callback)</code></b> - Invoke the given callback after the buffer is saved to disk.</p>
            <p><b><code>::onDidDestroy(callback)</code></b> - Invoke the given callback when the editor is destroyed.</p>
            <p><b><code>::getBuffer()</code></b> - Retrieves the current TextBuffer.</p>
            <p><b><code>::observeGutters(callback)</code></b> - Calls your callback when a Gutter is added to the editor. Immediately calls your callback for each existing gutter.</p>
            <p><b><code>::onDidAddGutter(callback)</code></b> - Calls your callback when a Gutter is added to the editor.</p>
            <p><b><code>::onDidRemoveGutter(callback)</code></b> - Calls your callback when a Gutter is removed from the editor.</p>
            <h4>File Details</h4>
            <hr>
            <p><b><code>::getTitle()</code></b> - Get the editor's title for display in other parts of the UI such as the tabs.</p>
            <p><b><code>::getLongTitle()</code></b> - Get unique title for display in other parts of the UI, such as the window title.</p>
            <p><b><code>::getPath()</code></b> - Returns the String path of this editor's text buffer.</p>
            <p><b><code>::isModified() </code></b> - Returns Boolean true if this editor has been modified.</p>
            <p><b><code>::isEmpty()</code></b> - Returns Boolean true if this editor has no content.</p>
            <h4>File Operations</h4>
            <hr>
            <p><b><code>::save()</code></b> - Saves the editor's text buffer.</p>
            <p><b><code>::saveAs(filePath)</code></b> - Saves the editor's text buffer as the given path.</p>
            <h4>Reading Text</h4>
            <hr>
            <p><b><code>::getText()</code></b> - Returns a String representing the entire contents of the editor.</p>
            <p><b><code>::getTextInBufferRange(range)</code></b> - Get the text in the given Range in buffer coordinates.</p>
            <p><b><code>::getLineCount()</code></b> - Returns a Number representing the number of lines in the buffer.</p>
            <p><b><code>::getScreenLineCount()</code></b> - Returns a Number representing the number of screen lines in the editor. This accounts for folds.</p>
            <p><b><code>::getLastBufferRow()</code></b> - Returns a Number representing the last zero-indexed buffer row number of the editor.</p>
            <p><b><code>::getLastScreenRow()</code></b> - Returns a Number representing the last zero-indexed screen row number of the editor.</p>
            <p><b><code>::lineTextForBufferRow(bufferRow)</code></b> - Returns a String representing the contents of the line at the given buffer row.</p>
            <p><b><code>::lineTextForScreenRow(screenRow)</code></b> - Returns a String representing the contents of the line at the given screen row.</p>
            <p><b><code>::getCurrentParagraphBufferRange()</code></b> - Get the Range of the paragraph surrounding the most recently added cursor.</p>
            <h4>Mutating Text</h4>
            <hr>
            <p><b><code>::setText(text)</code></b> - Replaces the entire contents of the buffer with the given String.</p>
            <p><b><code>::setTextInBufferRange(range, text, [options])</code></b> - Set the text in the given Range in buffer coordinates.</p>
            <p><b><code>::insertText(text, [options])</code></b> - For each selection, replace the selected text with the given text.</p>
            <p><b><code>::insertNewline()</code></b> - For each selection, replace the selected text with a newline.</p>
            <p><b><code>::delete()</code></b> - For each selection, if the selection is empty, delete the character following the cursor. Otherwise delete the selected text.</p>
            <p><b><code>::backspace()</code></b> - For each selection, if the selection is empty, delete the character preceding the cursor. Otherwise delete the selected text.</p>
            <h4>History</h4>
            <hr>
            <p><b><code>::undo()</code></b> - Undo the last change.</p>
            <p><b><code>::redo()</code></b> - Redo the last change.</p>
            <h4>TextEditor Coordinates</h4>
            <hr>
            <p><b><code>::screenPositionForBufferPosition(bufferPosition, [options])</code></b> - Convert a position in buffer-coordinates to screen-coordinates.</p>
            <p><b><code>::bufferPositionForScreenPosition(bufferPosition, [options])</code></b> - Convert a position in screen-coordinates to buffer-coordinates.</p>
            <p><b><code>::screenRangeForBufferRange(bufferRange)</code></b> - Convert a range in buffer-coordinates to screen-coordinates.</p>
            <p><b><code>::bufferRangeForScreenRange(screenRange)</code></b> - Convert a range in screen-coordinates to buffer-coordinates.</p>
            <h4>Decorations</h4>
            <hr>
            <p><b><code>::decorateMarker(marker, decorationParams)</code></b> - Add a decoration that tracks a DisplayMarker. When the marker moves, is invalidated, or is destroyed, the decoration will be updated to reflect the marker's state.</p>
            <p><b><code>::decorateMarkerLayer(markerLayer, decorationParams)</code></b> - Add a decoration to every marker in the given marker layer. Can be used to decorate a large number of markers without having to create and manage many individual decorations.</p>
            <h4>Markers</h4>
            <hr>
            <p><b><code>::markBufferRange(range, properties)</code></b> - Create a marker on the default marker layer with the given range in buffer coordinates. This marker will maintain its logical location as the buffer is changed, so if you mark a particular word, the marker will remain over that word even if the word's location in the buffer changes.</p>
            <p><b><code>::markScreenRange(range, properties)</code></b> - Create a marker on the default marker layer with the given range in screen coordinates. This marker will maintain its logical location as the buffer is changed, so if you mark a particular word, the marker will remain over that word even if the word's location in the buffer changes.</p>
            <p><b><code>::markBufferPosition(bufferPosition, [options])</code></b> - Create a marker on the default marker layer with the given buffer position and no tail. To group multiple markers together in their own private layer, see <code>::addMarkerLayer</code>.</p>
            <p><b><code>::markScreenPosition(screenPosition, [options])</code></b> - Create a marker on the default marker layer with the given screen position and no tail. To group multiple markers together in their own private layer, see <code>::addMarkerLayer</code>.</p>
            <p><b><code>::findMarkers(properties)</code></b> - Find all DisplayMarkers on the default marker layer that match the given properties.</p>
            <p><b><code>::addMarkerLayer(options)</code></b> - Create a marker layer to group related markers.</p>
            <p><b><code>::getMarkerLayer(id)</code></b> - Get a DisplayMarkerLayer by id.</p>
            <p><b><code>::getDefaultMarkerLayer()</code></b> - Get the default DisplayMarkerLayer.</p>
            <h4>Cursors</h4>
            <hr>
            <p><b><code>::getCursorBufferPosition()</code></b> - Get the position of the most recently added cursor in buffer coordinates.</p>
            <p><b><code>::getCursorBufferPositions()</code></b> - Get the position of all the cursor positions in buffer coordinates.</p>
            <p><b><code>::setCursorBufferPosition(position, [options])</code></b> - Move the cursor to the given position in buffer coordinates.</p>
            <p><b><code>::getCursorAtScreenPosition(position)</code></b> - Get a Cursor at given screen coordinates Point</p>
            <p><b><code>::getCursorScreenPosition()</code></b> - Get the position of the most recently added cursor in screen coordinates.</p>
            <p><b><code>::getCursorScreenPositions()</code></b> - Get the position of all the cursor positions in screen coordinates.</p>
            <p><b><code>::setCursorScreenPosition(position, [options])</code></b> - Move the cursor to the given position in screen coordinates.</p>
            <p><b><code>::addCursorAtBufferPosition(bufferPosition)</code></b> - Add a cursor at the given position in buffer coordinates.</p>
            <p><b><code>::addCursorAtScreenPosition(screenPosition)</code></b> - Add a cursor at the position in screen coordinates.</p>
            <p><b><code>::hasMultipleCursors()</code></b> - Returns Boolean indicating whether or not there are multiple cursors.</p>
            <p><b><code>::moveUp([lineCount])</code></b> - Move every cursor up one row in screen coordinates.</p>
            <p><b><code>::moveDown([lineCount])</code></b> - Move every cursor down one row in screen coordinates.</p>
            <p><b><code>::moveLeft([columnCount])</code></b> - Move every cursor left one column.
            </p>
            <p><b><code>::moveRight([columnCount])</code></b> - Move every cursor right one column.</p>
            <p><b><code>::moveToBeginningOfLine()</code></b> - Move every cursor to the beginning of its line in buffer coordinates.</p>
            <p><b><code>::moveToBeginningOfScreenLine()</code></b> - Move every cursor to the beginning of its line in screen coordinates.</p>
            <p><b><code>::moveToFirstCharacterOfLine()</code></b> - Move every cursor to the first non-whitespace character of its line.</p>
            <p><b><code>::moveToEndOfLine()</code></b> - Move every cursor to the end of its line in buffer coordinates.</p>
            <p><b><code>::moveToEndOfScreenLine()</code></b> - Move every cursor to the end of its line in screen coordinates.</p>
            <p><b><code>::moveToBeginningOfWord()</code></b> - Move every cursor to the beginning of its surrounding word.</p>
            <p><b><code>::moveToEndOfWord()</code></b> - Move every cursor to the end of its surrounding word.</p>
            ",


            "Tooltip Manager" =>
            "<p>TooltipManager associates tooltips with HTML elements. You can get the TooltipManager via <code>atom.tooltips</code>.</p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>::add(target, options)</code></b> - Add a tooltip to the given element.</p>",


            "View Registry"=>
            "<p>ViewRegistry handles the association between model and view types in Atom. We call this association a View Provider. As in, for a given model, this class can provide a view via ::getView, as long as the model/view association was registered via <code>::addViewProvider</code></p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>::addViewProvider([modelConstructor], createView)</code></b> - Add a provider that will be used to construct views in the workspace's view layer based on model objects in its model layer.</p>
            <p><b><code>::getView()</code></b> - Get the view associated with an object in the workspace.</p>",


            "Workspace"=>
            "<p>Workspace represents the state of the user interface for the entire window. An instance of this class is available via the <code>atom.workspace</code> global. Interact with this object to open files, be notified of current and future editors, and manipulate panes. To add panels, use <code>Workspace::addTopPanel</code> and friends.</p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>::observeTextEditors(callback)</code></b> - Invoke the given callback with all current and future text editors in the workspace.</p>
            <p><b><code>::observePaneItems(callback)</code></b> - Invoke the given callback with all current and future panes items in the workspace.</p>
            <p><b><code>::onDidChangeActivePaneItem(callback)</code></b> - Invoke the given callback when the active pane item changes.</p>
            <p><b><code>::onDidStopChangingActivePaneItem(callback)</code></b> - Invoke the given callback when the active pane item stops changing.</p>
            <p><b><code>::onDidChangeActiveTextEditor(callback)</code></b> - Invoke the given callback when a text editor becomes the active text editor and when there is no longer an active text editor.</p>
            <p><b><code>::observeActivePaneItem(callback)</code></b> - Invoke the given callback with the current active pane item and with all future active pane items in the workspace.</p>
            <p><b><code>::observeActiveTextEditor(callback)</code></b> - Invoke the given callback with the current active text editor (if any), with all future active text editors, and when there is no longer an active text editor.</p>
            <p><b><code>::onDidOpen(callback)</code></b> - Invoke the given callback whenever an item is opened. Unlike <code>::onDidAddPaneItem</code>, observers will be notified for items that are already present in the workspace when they are reopened.</p>
            <h4>Opening</h4>
            <hr>
            <p><b><code>::open([uri], [options])</code></b> - Opens the given URI in Atom asynchronously. If the URI is already open, the existing item for that URI will be activated. If no URI is given, or no registered opener can open the URI, a new empty TextEditor will be created.</p>
            <p><b><code>::hide([itemOrURI])</code></b> - Search the workspace for items matching the given URI and hide them.</p>
            <p><b><code>::toggle([itemOrURI])</code></b> - Search the workspace for items matching the given URI. If any are found, hide them. Otherwise, open the URL.</p>
            <p><b><code>::createItemForURI(uri)</code></b> - Creates a new item that corresponds to the provided URI.</p>
            <p><b><code>::isTextEditor(object)</code></b> - Returns a Boolean that is true if object is a TextEditor.</p>
            <p><b><code>::reopenItem()</code></b> - Asynchronously reopens the last-closed item's URI if it hasn't already been reopened.</p>
            <p><b><code>::addOpener(opener)</code></b> - Register an opener for a uri.</p>
            <h4>Pane Items</h4>
            <hr>
            <p><b><code>::getPaneItems()</code></b> - Get all pane items in the workspace.</p>
            <p><b><code>::getActivePaneItem()</code></b> - Get the active Pane's active item.</p>
            <p><b><code>::getTextEditors()</code></b> - Get all text editors in the workspace.</p>
            <p><b><code>::getActiveTextEditor()</code></b> - Get the workspace center's active item if it is a TextEditor.</p>
            <h4>Pane Locations</h4>
            <hr>
            <p><b><code>::getCenter()</code></b> - Get the WorkspaceCenter at the center of the editor window.</p>
            <p><b><code>::getLeftDock()</code></b> - Get the Dock to the left of the editor window.</p>
            <p><b><code>::getRightDock()</code></b> - Get the Dock to the right of the editor window.</p>
            <p><b><code>::getBottomDock()</code></b> - Get the Dock below the editor window.</p>
            <h4>Panels</h4>
            <hr>
            <p><b><code>::getBottomPanels()</code></b> - Get an Array of all the panel items at the bottom of the editor window.</p>
            <p><b><code>::addBottomPanel(options)</code></b> - Adds a panel item to the bottom of the editor window.</p>
            <p><b><code>::getLeftPanels()</code></b> - Get an Array of all the panel items to the left of the editor window.</p>
            <p><b><code>::addLeftPanel(options)</code></b> - Adds a panel item to the left of the editor window.</p>
            <p><b><code>::getRightPanels()</code></b> - Get an Array of all the panel items to the right of the editor window.</p>
            <p><b><code>::addRightPanel(options)</code></b> - Adds a panel item to the right of the editor window.</p>
            <p><b><code>::getTopPanels()</code></b> - Get an Array of all the panel items at the top of the editor window.</p>
            <p><b><code>::addTopPanel(options)</code></b> - Adds a panel item to the top of the editor window above the tabs.</p>
            <p><b><code>::getHeaderPanels()</code></b> - Get an Array of all the panel items in the header.</p>
            <p><b><code>::addHeaderPanel(options)</code></b> - Adds a panel item to the header.
            </p>
            <p><b><code>::getFooterPanels()</code></b> - Get an Array of all the panel items in the footer.</p>
            <p><b><code>::addFooterPanel(options)</code></b> - Adds a panel item to the footer.</p>
            <p><b><code>::getModalPanels()</code></b> - Get an Array of all the modal panel items.</p>
            <p><b><code>::addModalPanel(options)</code></b> - Adds a panel item as a modal dialog.</p>
            <p><b><code>::panelForItem(item)</code></b> - Returns the Panel associated with the given item.</p>
            <h4>Searching and Replacing</h4>
            <hr>
            <p><b><code>::scan(regex, [options], iterator)</code></b> - Performs a search across all files in the workspace.</p>
            <p><b><code>::replace(regex, replacementText, filePaths, iterator)</code></b> - Performs a replace across all the specified files in the project.</p>
            ",


            "Workspace Center"=>
            "<p>WorkspaceCenter represents the workspace at the center of the entire window.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::observeTextEditors(callback)</code></b> - Invoke the given callback with all current and future text editors in the workspace center.</p>
            <p><b><code>::observePaneItems(callback)</code></b> - Invoke the given callback with all current and future panes items in the workspace center.</p>
            <p><b><code>::onDidChangeActivePaneItem(callback)</code></b> - Invoke the given callback when the active pane item changes.</p>
            <p><b><code>::onDidStopChangingActivePaneItem(callback)</code></b> - Invoke the given callback when the active pane item stops changing.</p>
            <p><b><code>::observeActivePaneItem(callback)</code></b> - Invoke the given callback with the current active pane item and with all future active pane items in the workspace center.</p>
            <h4>Pane Items</h4>
            <hr>
            <p><b><code>::getPaneItems()</code></b> - Get all pane items in the workspace center.</p>
            <p><b><code>::getActivePaneItem()</code></b> - Get the active Pane's active item.</p>
            <p><b><code>::getTextEditors()</code></b> - Get all text editors in the workspace center.</p>
            <p><b><code>::getActiveTextEditor()</code></b> - Get all text editors in the workspace center.</p>",
    );
?>
