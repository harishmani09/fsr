<x-app-layout>
    <div class="mx-auto max-w-xl">
        <button onclick="addNewRow()">Add New Row</button>
        <button onclick="deleteRow()">Delete Row</button>
        <table id="partTable">
            <tr>
                <th>Part Code</th>
                <th>Description</th>
                <th>Sr No.</th>
                <th>Batch Code</th>
            </tr>
        </table>
    </div>
    <script>
        function addNewRow() {
            const table = document.querySelector('#partTable');
            const rowCount = table.rows.length;
            console.log(rowCount);
            const cellCount = table.rows[0].cells.length;
            console.log(cellCount);
            const row = table.insertRow(rowCount);
            for (let i = 0; i <= cellCount; i++) {
                let cell = row.insertCell(i);
                if (i <= cellCount - 1) {
                    cell.innerHTML = '<input class="text" />';
                } else {
                    cell.innerHTML = '<input type="button" value="delete" onclick="deleteRow(this)" />'
                }
            }
        }

        function deleteRow(ele) {
            const table = document.querySelector('#partTable');
            const rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert('there is no row available to delete');
                return;
            };
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }

        }
    </script>
</x-app-layout>
