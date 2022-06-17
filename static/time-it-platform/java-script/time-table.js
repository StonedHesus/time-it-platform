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

// Create a new table body element for our table element.
let currentTableBody = document.createElement('tbody');

// Create seven columns, one for each day of the week, and twenty four rows, one for each hour of the day and
// add them to the currentTableBody element.
for(let columns = 0 ; columns < NUMBER_OF_COLUMNS ; ++columns){

    // Create a new table row element in which to store our twenty four table data elements and assigned to it an
    // unique identifier.
    let currentColumn = document.createElement('tr');
    currentColumn.setAttribute('id', TABLE_COLUMNS_IDENTIFIERS[columns]);
    for(let rows = 0 ; rows < NUMBER_OF_ROWS ; ++rows){

        // Instantiate a new table data element and append it to the currentColumn.
        let currentLine = document.createElement('td');
        currentColumn.append(currentLine);
    }

    // Append the current column to the table.
    currentTable.append(currentColumn)
}

// Append the table to the current selected portion of the page.
containerOfTable.appendChild(currentTable);