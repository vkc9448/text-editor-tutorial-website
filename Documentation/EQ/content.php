<?php
    //<p><b><code></code></b> - </p>
    /*
        <h4>Properties</h4>
        <hr>
    */
    $content = array(
            

            "Emitter" =>
            "<p>Emitter is a utility class to be used when implementing event-based APIs that allows for handlers registered via <code>::on</code> to be invoked with calls to <code>::emit</code>. Instances of this class are intended to be used internally by classes that expose an event-based API.</p>
            <h4>Construction and Destruction</h4>
            <hr>
            <p><b><code>::constructor()</code></b> - Construct an emitter.</p>
            <p><b><code>::clear()</code></b> - Clear out any existing subscribers.</p>
            <p><b><code>::dispose()</code></b> - Unsubscribe all handlers.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::on(eventName,handler)</code></b> - Register the given handler function to be invoked whenever events by the given name are emitted via <code>::emit</code>.</p>
            <p><b><code>::once(eventName,handler)</code></b> - Register the given handler function to be invoked the next time an events with the given name is emitted via <code>::emit</code>.</p>
            <p><b><code>::preempt(eventName,handler)</code></b> - Register the given handler function to be invoked before all other handlers existing at the time of subscription whenever events by the given name are emitted via <code>::emit</code>.</p>
            <h4>Event Emission</h4>
            <hr>
            <p><b><code>::emit(eventName,value)</code></b> - Invoke handlers registered via <code>::on</code> for the given event name.</p>",


            "Layer Decoration" =>
            "<p>LayerDecoration represents a decoration that applies to every marker on a given layer. Created via <code>TextEditor::decorateMarkerLayer</code></p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>::destroy()</code></b> - Destroys the decoration.</p>
            <p><b><code>::isDestroyed()</code></b> - Determine whether this decoration is destroyed.</p>
            <p><b><code>::getProperties()</code></b> - Get this decoration's properties.</p>
            <p><b><code>::setProperties(newProperties)</code></b> - Set this decoration's properties.</p>
            <p><b><code>::setPropertiesForMarker(marker,properties)</code></b> - Override the decoration properties for a specific marker.</p>
            ",


            "Marker Layer" =>
            "<p>MarkerLayer is a container for a related set of markers.</p>
            <h4>Lifecycle</h4>
            <hr>
            <p><b><code>::copy()</code></b> - Create a copy of this layer with markers in the same state and locations.</p>
            <p><b><code>::destroy()</code></b> - Destroy this layer.</p>
            <p><b><code>::clear()</code></b> - Remove all markers from this layer.</p>
            <p><b><code>::isDestroyed()</code></b> - Determine whether this layer has been destroyed.</p>
            <h4>Querying</h4>
            <hr>
            <p><b><code>::getMarker()</code></b> - Get an existing marker by its id.</p>
            <p><b><code>::getMarkers()</code></b> - Get all existing markers on the marker layer.</p>
            <p><b><code>::getMarkerCount()</code></b> - Get the number of markers in the marker layer.</p>
            <p><b><code>::findMarkers()</code></b> - Find markers in the layer conforming to the given parameters.</p>
            <h4>Marker Creation</h4>
            <hr>
            <p><b><code>::markRange(range,options)</code></b> - Create a marker with the given range.</p>
            <p><b><code>::markPosition(position,[options]</code></b> - Create a marker at with its head at the given position with no tail.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::onDidUpdate(callback)</code></b> - Subscribe to be notified asynchronously whenever markers are created, updated, or destroyed on this layer. Prefer this method for optimal performance when interacting with layers that could contain large numbers of markers.</p>
            <p><b><code>::onDidCreateMarker(callback)</code></b> - Subscribe to be notified synchronously whenever markers are created on this layer. Avoid this method for optimal performance when interacting with layers that could contain large numbers of markers.</p>
            <p><b><code>::onDidDestroy()</code></b> - Subscribe to be notified synchronously when this layer is destroyed.</p>",


            "Notification" =>
            "<p>Notification is a notification to the user containing a message and type.</p>
            <h4>Event Subscription</h4>
            <hr>
            <p><b><code>::onDidDismiss(callback)</code></b> - Invoke the given callback when the notification is dismissed.</p>
            <p><b><code>::onDidDisplay(callback)</code></b> - Invoke the given callback when the notification is displayed.</p>
            <h4>Methods</h4>
            <hr>
            <p><b><code>::getType()</code></b> - Returns the String type.</p>
            <p><b><code>::getMessage()</code></b> - Returns the String message.</p>",


            "Notification Manager" =>
            "<p>NotificationManager is used to create Notifications to be shown to the user. An instance of this class is always available as the <code>atom.notifications</code> global.</p>
            <h4>Events</h4>
            <hr>
            <p><b><code>::onDidAddNotification(callback)</code></b> - Invoke the given callback after a notification has been added.</p>
            <h4>Adding Notifications</h4>
            <hr>
            <p><b><code>::addSuccess(message,[options])</code></b> - Add a success notification.</p>
            <p><b><code>::addInfo(message,[options])</code></b> - Add an informational notification.</p>
            <p><b><code>::addWarning(message,[options])</code></b> - Add a warning notification</p>
            <p><b><code>::addError(message,[options])</code></b> - Add an error notification.
            </p>
            <p><b><code>::addFatalError(message,[options])</code></b> - Add a fatal error notification.</p>
            <h4>Getting Notification</h4>
            <hr>
            <p><b><code>::getNotifications()</code></b> - Get all the notifications.</p>",


            "Point" =>
            "<p>Point represents a point in a buffer in row/column coordinates.</p>
            <h4>Properties</h4>
            <hr>
            <p><b><code>::row </code></b> - A zero-indexed Number representing the row of the Point.</p>
            <p><b><code>::column </code></b> - A zero-indexed Number representing the column of the Point.</p>
            <h4>Construction</h4>
            <hr>
            <p><b><code>.fromObject(object, copy)</code></b> - Convert any point-compatible object to a Point.</p>
            <p><b><code>::constructor(row, column)</code></b> - Construct a Point object</p>
            <p><b><code>::copy()</code></b> - Returns a new Point with the same row and column.</p>
            <p><b><code>::negate()</code></b> - Returns a new Point with the row and column negated.</p>
            <h4>Comparison</h4>
            <hr>
            <p><b><code>.min(point1, point2)</code></b> - Returns the given Point that is earlier in the buffer.</p>
            <p><b><code>::compare(other)</code></b> - Returns -1 if this point precedes the argument.<br>Returns 0 if this point is equivalent to the argument.<br>Returns 1 if this point follows the argument.</p>
            <p><b><code>::isEqual(other)</code></b> - Returns a Boolean indicating whether this point has the same row and column as the given Point or point-compatible Array.</p>
            <p><b><code></code>::isLessThan(other)</b> - Returns a Boolean indicating whether this point precedes the given Point or point-compatible Array.</p>
            <p><b><code>::isLessThanOrEqual(other)</code></b> - Returns a Boolean indicating whether this point precedes or is equal to the given Point or point-compatible Array.</p>
            <p><b><code>::isGreaterThan(other)</code></b> - Returns a Boolean indicating whether this point follows the given Point or point-compatible Array.</p>
            <p><b><code>::isGreaterThanOrEqual(other)</code></b> - Returns a Boolean indicating whether this point follows or is equal to the given Point or point-compatible Array.</p>
            <h4>Operations</h4>
            <hr>
            <p><b><code>::freeze()</code></b> - Makes this point immutable and returns itself.</p>
            <p><b><code>::translate(other)</code></b> - Build and return a new point by adding the rows and columns of the given point.</p>
            <p><b><code>::traverse(other)</code></b> - Build and return a new Point by traversing the rows and columns specified by the given point.</p>
            <h4>Conversion</h4>
            <hr>
            <p><b><code>::toArray()</code></b> - Returns an array of this point's row and column.</p>
            <p><b><code>::serialize()</code></b> - Returns an array of this point's row and column.</p>
            <p><b><code>::toString()</code></b> - Returns a string representation of the point.</p>",


               );
?>
