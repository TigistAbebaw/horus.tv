createEvent('#media_item_1', 10);
createEvent('#media_item_2', 15);

/**
 * Set an event for element (id) on a specific time in seconds
 */
function createEvent(elementIdentifier, time){

    setTimeout(function() {
        $(elementIdentifier).show();
    }, time * 1000);

}
