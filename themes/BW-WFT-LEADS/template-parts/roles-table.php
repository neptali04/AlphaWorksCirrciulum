<!--The table element represents data in a series of rows and columns. Tables should only be used for displaying tabular data, and never for page layout.-->
<table>
  <!--The caption element <caption> represents the title of the table.-->
  <caption>Employee Data</caption>
  <!--The table head element <thead> (not to be confused with the table header cell element) defines a set of rows that make up the header of a table.-->
  <thead>
      <!--The table row element <tr> defines a row of cells in a table. Table rows can be filled with table cells and table header cells.-->
    <tr>
      <!--The table header cell <th> helps label a group of cells in either a column or a row.-->
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Job Role</th>
    </tr>
  </thead>
  <!--The table body element <tbody> defines one or more rows that make up the primary contents (or "body") of a table.-->
  <tbody>
    <tr>
      <th scope="row">Salina Brown</th>
      <td>hello@salinabrown.com</td>
      <td>Project Manager</td>
    </tr>
    <tr>
      <!--The enumerated attribute 'scope' defines the cells that the header defined in this <th> element relates to. It may have the following values:-->
      <!--'row' which means that the header relates to all cells in the row that this element belongs to.-->
      <!--'col' which means that the header relates to all cells in the column that this element belongs to.-->
      <th scope="row">J.P. Espinal</th>
      <!--The table cell element <td> contains data and represents a single table cell. Each table cell should be inside a table row.-->
      <td>hello@jpespinal.com</td>
      <td>Designer/Developer</td>
    </tr>
    <tr>
      <th scope="row">Robert Young</th>
      <td>hello@robertyoung.com</td>
      <td>Nobody Knows</td>
    </tr>
  </tbody>
  <!--The table foot element <tfoot> contains a summary of the table. This might be totals for columns of numerical data or meta information about the source of data.-->
  <tfoot>
    <tr>
      <!--The 'colspan' attribute contains a non-negative integer value that indicates for how many columns the cell extends. Its default value is 1; if its value is set to 0, it extends until the end of the <colgroup>, even if implicitly defined, that the cell belongs to. Values higher than 1000 will be considered as incorrect and will be set to the default value (1).-->
      <td colspan="3">Data is updated every 15 minutes.</td>
    </tr>
  </tfoot>
</table>