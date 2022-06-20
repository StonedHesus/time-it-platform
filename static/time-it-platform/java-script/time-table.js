// Constants used throughout this here script.
// WARNING: modifying this here values will result in behaviour which does not correspond to the specification.ß
const NUMBER_OF_COLUMNS = 7; // Seven columns are needed so as to properly display each day of the week.
const NUMBER_OF_ROWS    = 24; // Each day consists of twenty four hours on our lovely blue rock.
// A list of unique identifier which will be used for our columns.
const TABLE_COLUMNS_IDENTIFIERS = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

// Store a reference to the body element of the current targeted page.
let currentBody = document.body;

// Retrieve the location where the newly dynamically generated table is to be positioned.
let containerOfTable = document.getElementById('time-table');

// Create a new table element.
let currentTable = document.createElement('table');

// Create a new table header.
let currentTableHeader = document.createElement('thead');

// Add the table header elements to the table header.
for(let i = 0 ; i < TABLE_COLUMNS_IDENTIFIERS.length ; ++i){

    // Create a new table head element.
    let currentTableHeadElement = document.createElement('th');

    // Add to it the day which corresponds to that particular column and capitalise the first letter of it.
    currentTableHeadElement.innerText = TABLE_COLUMNS_IDENTIFIERS[i].charAt(0).toUpperCase() +
        TABLE_COLUMNS_IDENTIFIERS[i].slice(1);

    // Append the current table head element to the table header.
    currentTableHeader.append(currentTableHeadElement);
}

// Add the table header to the current table element.
currentTable.append(currentTableHeader);

// Create a new table body element for our table element.
let currentTableBody = document.createElement('tbody');

// Create seven columns, one for each day of the week, and twenty four rows, one for each hour of the day and
// add them to the currentTableBody element.
for(let rows = 0 ; rows < NUMBER_OF_ROWS ; ++rows){

    // Create a new table row element in which to store our twenty four table data elements and assigned to it an
    // unique identifier.
    let currentRow = document.createElement('tr');
    // currentRow.setAttribute('id', TABLE_COLUMNS_IDENTIFIERS[columns]);
    for(let column = 0 ; column < NUMBER_OF_COLUMNS ; ++column){

        // Instantiate a new table data element and append it to the currentColumn.
        let currentCell = document.createElement('td');
        currentCell.setAttribute('class', 'time-table__block')
        currentCell.addEventListener("click", function (event) {

            currentBody.append(createEnquiryForm());

            // let newCell = document.createElement('td');
            // prompt("The current coordinates are" + event.clientY + " " + event.clientX);
            // newCell.setAttribute('style', 'time-table__block__new-activity');
            // newCell.append(currentRow);
        })
        currentRow.append(currentCell);
    }

    currentTableBody.append(currentRow);
}

// Append the current table body to the current table.
currentTable.append(currentTableBody);

// Append the table to the current selected portion of the page.
containerOfTable.appendChild(currentTable);

// Methods of the script.
function addField(nameOfTheField, typeOfTheField){
    /**
     * @param {string} nameOfTheField; indicates the name which will be utilised both as an label and identifier for
     * the dynamically generated field.
     * @param {string} typeOfTheField; indicates which type of field we ought to create, i.e. whether we have a basic
     * text input field or a multiple choices one.
     *
     * This here method generates a new field element and its corresponding label and it returns it to the caller in
     * the hopes that the caller might append them further to a container or another element.
     *
     * @return {tuple} a two valued tuple/list structure which contains on position 0 the label and on position 1 the
     * actual input field element.
     *
     * @author Andrei-Paul Ionescu.
     */
}

function createEnquiryForm(){
    /**
     * @param none; this here method requires no arguments upon invocation.
     * @type {HTMLDivElement}
     * @returns a dynamically generated pop-up form which allows the user to customise information regarding its event/activity.
     *
     * This here method generates a pop-up form which based on the selection might by the user automatically suggests
     * certain options for the event which is in the process to be created, some of which are the starting hour
     * which is indicated thanks to the user's click event, and the end hour, for by construction we assume that
     * it is most likely that the event will be at least one hour.
     *
     * @author Andrei-Paul Ionescu
     */

    // Create a new div element in which we will store the form elements.
    let formContainer = document.createElement('div');

    // Link it with the bootstrap style classes which apply to it and also the custom ones which we have created.
    formContainer.setAttribute('class', 'container time-table__enquiry-form__container');

    // Create the form element.
    let formBody = document.createElement('form');

    // Create a container for the form's inputs and buttons.
    let formBodyContainer = document.createElement('div');

    // Link the form body's container to its specific css classes.
    formBodyContainer.setAttribute('class', 'form-group');

    // Create a label for the field STARTING TIME.
    let label = document.createElement('label');

    // Set the label for attribute so that it matches with the id of the input element.
    label.setAttribute('for', 'starting-time')

    // Set the text of the label.
    label.textContent = "Starting time"

    // Append the label to the current container.
    formBodyContainer.append(label);

    // Create the From field of the form.
    let formFieldFrom = document.createElement('input');

    // Add an id to the current field so as to be able to link it with its corresponding label.
    formFieldFrom.setAttribute('id', 'starting-time');

    // Add the form field element to the form container element.
    formBodyContainer.append(formFieldFrom);

    // Add the form body container to the form element.
    formBody.append(formBodyContainer);

    // Add the form element to the current container.
    formContainer.append(formBody);

    // Finally return the newly dynamically generated pop-up form to the caller of the method.
    return formContainer;
}
