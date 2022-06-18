// Constants used throughout this here script.
// WARNING: modifying this here values will result in behaviour which does not correspond to the specification.ß
const NUMBER_OF_COLUMNS = 7; // Seven columns are needed so as to properly display each day of the week.
const NUMBER_OF_ROWS    = 24; // Each day consists of twenty four hours on our lovely blue rock.
// A list of unique identifier which will be used for our columns.
const TABLE_COLUMNS_IDENTIFIERS = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

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
        currentCell.addEventListener("click", function () {

            currentCell.setAttribute('class', 'touched');
        })
        currentRow.append(currentCell);
    }

    currentTableBody.append(currentRow);
}

// Append the current table body to the current table.
currentTable.append(currentTableBody);

// Append the table to the current selected portion of the page.
containerOfTable.appendChild(currentTable);