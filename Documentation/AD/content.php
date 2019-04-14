<?php
        //<p><b><code></code></b> - </p>
    $content = array(
            "Atom Environment" =>
            "<p>AtomEnvironment is always available as the Atom global. It is essential for dealing with packages, themes, menus, and the window.</p>
            <h4>Properties</h4>
            <hr>
            <p><b><code>::commands</code></b> - A CommandRegistry instance.</p>
            <p><b><code>::config</code></b> - A Config instance.</p>
            <p><b><code>::clipboard</code></b> - A Clipboard instance.</p>
            <p><b><code>::contextMenu</code></b> - A ContextMenuManager instance.</p>
            <p><b><code>::menu</code></b> - A MenuManager instance.</p>
            <p><b><code>::keymaps</code></b> - A KeyMapManager instance.</p>
            <p><b><code>::tooltips</code></b> - A TooltipManager instance.</p>
            <p><b><code>::notifications</code></b> - A NotificationManager instance.</p>
            <p><b><code>::project</code></b> - A Project instance.</p>
            <p><b><code>::grammars</code></b> - A GrammaRegistry instance.</p>
            <p><b><code>::history</code></b> - A HistoryManager instance.</p>
            <p><b><code>::packages</code></b> - A PackageManager instance.</p>
            <p><b><code>::themes</code></b> - A ThemeManager instance.</p>
            <p><b><code>::styles</code></b> - A StyleManager instance.</p>
            <p><b><code>::deserializers</code></b> - A DeserializerManager instance.</p>
            <p><b><code>::views</code></b> -  A ViewRegistry instance.</p>
            <p><b><code>::workspace</code></b> - A Workspace instance.</p>
            <p><b><code>::textEditors</code></b> - A TextEditorRegistry instance.</p>",


            "Color" =>
            "<p>Color is a simple color class returned from <code>Config::get</code> when the value of the key path is a color. </p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>.parse(value)</code></b> - Parse a String or Object into a Color. </p>
            <p><b><code>::toHexString()</code></b> - Returns a String in the form <code>'#abcdef'.</code></p>
            <p><b><code>::toRGBAString()</code></b> - Returns a String in the form <code>'rgba(25,50,75,.9)'</code></p>",


            "Command Registry" =>
            "<p>CommandRegistry associates listener functions with commands in a context-sensitive way using CSS selectors. You can access a global instance of this class via atom.commands, and commands registered there will be presented in the command palette. The global command registry facilitates a style of event handling known as event delegation that was popularized by jQuery. Atom commands are expressed as custom DOM events that can be invoked on the currently focused element via a key binding or manually via the command palette. Rather than binding listeners for command events directly to DOM nodes, you instead register command event listeners globally on atom.commands and constrain them to specific kinds of elements with CSS selectors. Command names must follow the namespace:action pattern, where namespacewill typically be the name of your package, and action describes the behavior of your command. If either part consists of multiple words, these must be separated by hyphens. E.g. awesome-package:turn-it-up-to-eleven. All words should be lowercased. As the event bubbles upward through the DOM, all registered event listeners with matching selectors are invoked in order of specificity. In the event of a specificity tie, the most recently registered listener is invoked first. This mirrors the 'cascade' semantics of CSS. Event listeners are invoked in the context of the current DOM node, meaning this always points at event.currentTarget. As is normally the case with DOM events, stopPropagation and stopImmediatePropagation can be used to terminate the bubbling process and prevent invocation of additional listeners. </p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>::add(target,commandName,listener)</code></b> - Add one or more command listeners associated with a selector.</p>
            <p><b><code>::findCommands(params)</code></b> - Find all registered commands matching a query.</p>
            <p><b><code>::dispatch(target,commandName)</code></b> - Simulate the dispatch of a command ona DOM node. Useful for testing when you want to simulate the invocation of a command in a detached DOM node.</p>
            <p><b><code>::onWillDispatch(callback)</code></b> - Invoke a given callback before dispatching a command event.</p>
            <p><b><code>::onDidDispatch</code></b> - Invoke a given callback after dispatching a command event.</p>",


            "Composite Disposable" =>
            "<p>CompositeDisposable are objects that aggregate multiple Disposable instances together into a single disposable, so they can all be disposed as a group. These are very useful when subscribing to multiple events.</p>
            <h4>Construction and Destruction</h4>
            <hr>
            <p><b><code>::constructor()</code></b> - Construct an instance, optionally with one or more disposables.</p>
            <p><b><code>::dispose()</code></b> - Dispose all disposables added to this composite disposable. If this object has already been disposed, this method has no effect.</p>
            <h4>Managing Disposables</h4>
            <hr>
            <p><b><code>::add(...disposables)</code></b> - Add disposables to be disposed when the composite is disposed. If this objext has already been disposed, this method has no effect.</p>
            <p><b><code>::remove(disposable)</code></b> - Remove a previously added disposable.</p>
            <p><b><code>::delete()</code></b> - Alias to compositeDisposable<code>::remove</code></p>
            <p><b><code>::clear()</code></b> - Clear all disposables. They will not be disposed by the next call to dispose.</p>",


            "Config" =>
            "<p>Config is used to access all of Atom\'s configuration details. An instance of this class is always available as the <code>atom.config</code> global.</p>
            <h4>Config Subscription</h4>
            <hr>
            <p><b><code>::observe(keyPath,[options],callback)</code></b> - Add a listener for changes to a given key path. This is different than <code>::onDidChange</code> in that it will immediately call your callback with the current value of the config entry.</p>
            <p><b><code></code></b> - Add a listener for changes to a given key path. If keyPath is not specified, your callback will be called on changes to any key.</p>
            <h4>Managing Settings</h4>
            <hr>
            <p><b><code>::get(keyPath,[options])</code></b> - Retrieves the setting for the given key.</p>
            <p><b><code>::set(keyPath,value,[options])</code></b> - Sets the value for a configuration setting. This value stored in Atom's internal configuration file.</p>
            <p><b><code>::unset(keyPath,[options])</code></b> - Restore the setting at a keyPath to its default value.</p>",


            "Decoration" =>
            "<p>Decoration represents a decoration that follows a DisplayMarker. A decoration is basically a visual representation of a marker. It allows you to add CSS classes to line numbers in the gutter, lines, and add selection-line regions around marked ranges of text.</p>
            <h4>Construction and Destruction</h4>
            <hr>
            <p><b><code>::destroy()</code></b> - Destroy this markter decoration.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::onDidChangeProperties(callback)</code></b> - When the Decoration is updated via <code>Decoration::update</code>. Returns a Disposable one which <code>.dispose()</code> can be called to unsubsscribe.</p>
            <p><b><code>::onDidDestroy(callback)</code></b> - Invoke the given callback when the Decoration is destroyed.</p>
            <h4>Decoration Details</h4>
            <hr>
            <p><b><code>::getId()</code></b> - An id unique across all Decoration objects.</p>
            <p><b><code>::getMarker()</code></b> - Returns the marker associated with this Decoration.</p>
            <h4>Properties</h4>
            <hr>
            <p><b><code>::getProperties()</code></b> - Returns the Decoration's properties.</p>
            <p><b><code>::setProperties(newProperties)</code></b> - Update the marker with new properties. Allows you to change the decoration's class.</p>",


            "Display Marker" =>
            "<p>DisplayMarker represents a buffer annotation that remains logically stationary even as the buffer changes. This is used to represent cursors, folds, snippet targets, misspelled words, and anything else that needs to track a logical location in the buffer over time.</p>
            <h4>Construction and Destruction</h4>
            <hr>
            <p><b><code>::destroy()</code></b> - Destroys the marker, causing it to emit the 'destroyed' event. Once destroyed, a marker cannot be restored by undo/redo operations.</p>
            <p><b><code>::copy([properties])</code></b> - Creates and returns a new DisplayMakrer with the same properties as this marker.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::onDidChange(callback)</code></b> - Invoke the given callback when the state of the marker changes.</p>
            <p><b><code>::onDidDestroy(callback)</code></b> - Invoke the given callback when the marker is destroyed.</p>
            <h4>TextEditorMarker Details</h4>
            <hr>
            <p><b><code>::isValid()</code></b> - Returns a Boolean indicating whether the marker is valid. Markers can be invalidated when a region surrounding them in the buffer is changed.</p>
            <p><b><code>::isDestroyed()</code></b> - Returns a Boolean indicating whether the marker has been destroyed. A marker can be invalid without being destroyed, in which case undoing the invalidating operation would restore the marker. Once a marker is destroyed by calling <code>DisplayMarker::destroy</code>, no undo/redo operation can ever bring it back.</p>
            <p><b><code>::isReversed()</code></b> - Returns a Boolean indicating whether the head precedes the tail.</p>
            <p><b><code>::isExclusive()</code></b> - Returns a Boolean indicating whether changes that occur exactly at the marker's head or tail cause it to move.</p>
            <p><b><code>::getInvalidationStrategy()</code></b> - </p>
            <p><b><code>::getProperties()</code></b> - Get the invalidation strategy for this marker. Valid values include: never, surround, overlap, inside, and touch.</p>
            <p><b><code>::setProperties(properties)</code></b> - Merges an Object containing new properties into the marker's existing properties.</p>
            <p><b><code>::matchesProperties()</code></b> - Returns whether this marker matches the given parameters. The parameters are the same as <code>DisplayMarkerLayer::findMarkers.</code></p>
            <h4>Comparing to other markers</h4>
            <hr>
            <p><b><code>::compare(other)</code></b> - Compares this marker to another based on their ranges.</p>
            <p><b><code>::isEqual(other)</code></b> - Returns a Boolean indicating whether this marker is equivalent to another marker, meaning they have the same range and options.</p>
            <h4>Managing the marker's range</h4>
            <hr>
            <p><b><code>::getBufferRange()</code></b> - Gets the buffer range of this marker.</p>
            <p><b><code>::getScreenRange()</code></b> - Gets the screen range of this marker.</p>
            <p><b><code>::setBufferRange(bufferRange,[properties])</code></b> - Modifies the buffer range of this marker.</p>
            <p><b><code>::setScreenRange(screenRange,[options])</code></b> - Modifies the screen range of this marker.</p>
            <p><b><code>::getStartScreenPosition([options])</code></b> - Retrieves the screen position of the marker's start. This will always be less than or equal to the result of <code>DisplayMarker::getEndScreenPosition</code>.</p>
            <p><b><code>::getEndScreenPosition([options])</code></b> - Retrieves the screen position of the marker's end. This will always be greater than or equal to the result of <code>DisplayMarker::getStartScreenPosition</code>.</p>",



            "Display Marker Layer" =>
            "<p>DisplayMarkerLayer is a container for a related set of markers at the DisplayLayer level. Wraps an underlying MarkerLayer on the TextBuffer.</p>
            <h4>Lifecycle</h4>
            <hr>
            <p><b><code>::destroy()</code></b> - Destroy this layer.</p>
            <p><b><code>::clear()</code></b> - Destroy all markers in this layer.</p>
            <p><b><code>::isDestroyed()</code></b> - Determine whether this layer has been destroyed.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::onDidDestroy()</code></b> - Subscribe to be notified synchronously when this layer is destroyed.</p>
            <p><b><code>::onDidUpdate(callback)</code></b> - Subscribe to be notified asynchronously whenever markers are created, updated, or destroyed on this layer. Prefer this method for optimal performance when interacting with layers that could contain large numbers of markers.</p>
            <p><b><code>::onDidCreateMarker(callback)</code></b> - Subscribe to be notified synchronously whenever markers are created on this layer. Avoid this method for optimal performance when interacting with layers that could contain large numbers of markers</p>
            <h4>Marker creation</h4>
            <hr>
            <p><b><code>::markScreenRange(range,options)</code></b> - Create a marker with the given screen range.</p>
            <p><b><code>::markScreenPosition(screenPostion,[options])</code></b> - </p>
            <p><b><code>::markBufferRange(range,options)</code></b> - </p>
            <p><b><code>::markBufferPosition(bufferPosition,[options])</code></b> - </p>
            <h4>Querying</h4>
            <hr>
            <p><b><code>::getMarker()</code></b> - Get an existing marker by its id.</p>
            <p><b><code>::getMarkers()</code></b> - Get all markers in the layer.</p>
            <p><b><code>::getMarkerCount()</code></b> - Get the number of markers in the marker layer.</p>
            <p><b><code>::findMarkers(properties)</code></b> - Find markers in the layer conforming to the given parameters. This method finds markers based on the given properties. Markers can be associated with custom properties that will be compared with basic equality. In addition, there are several special properties that will be compared with the range of the markers rather than their properties.</p>",


            "Disposable" =>
            "<p>Disposable is a handle to a resource that can be disposed.</p>
            <p>For example, <code>Emitter::on</code> returns disposables representing subscriptions.</p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>.isDisposable(object)</code></b> - Ensure that object correctly implements the Disposable contract.</p>
            <h4>Construction and Destruction</h4>
            <hr>
            <p><b><code>::constructor(disposalAction)</code></b> - Construct a Disposable</p>
            <p><b><code>::dispose()</code></b> - Perform the disposal action, indicating that the resource associated with this disposable is no longer needed. You can call this method more than once, but the disposal action will only be performed the first time.</p>"
            


                );
?>
