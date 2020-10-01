/*    JavaScript
 *    Created by Karla Rodrigues on September 30, 2020-->
 *    Filename: appExcel.js
 */

function fileParse(parsedFile) {

      var line;
      var lineFoot;

      /* Reset the id #excelTable recipient */

      $("#excelTable").empty()

      /* Create the table information from the data to table id #excelTable */

      for (var i = 0; i < parsedFile.length; i++) {

            for (var j = 0; j < parsedFile[0].length; j++) {

                  if (i == 0) {
                        if (j == 0) {
                              line += '<thead> <tr> <th>' + parsedFile[i][j] + '</th>';
                              lineFoot += '<tfoot> <tr> <th>' + parsedFile[i][j] + '</th>';
                        } else {
                              line += '<th>' + parsedFile[i][j] + '</th>';
                              lineFoot += '<th>' + parsedFile[i][j] + '</th>';
                        }
                  } else {
                        if (j == 0) {
                              line += '<tr> <td>' + parsedFile[i][j] + '</td>';
                        } else {
                              line += '<td>' + parsedFile[i][j] + '</td>';
                        }
                  }
            }

            if (i == 0) {
                  line += '</tr> </thead> <tbody>';
                  lineFoot += '</tr> </tfoot>';
            } else {
                  line += '</tr>';
            }
      }
      line += '</tbody> ';
      $('table').append(line);
      line = ' ';
      $('table').append(lineFoot);
      lineFoot = ' ';

      /* After create the table, include de search and ordenation functionality */

      $('#excelTable').DataTable();

      /* Disable button to avoid recursive loald */

      document.getElementById("fileParse").disabled = true;

}

