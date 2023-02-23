<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
.container {
  display: flex;
  align-items: center;
}

table {
  display: inline-block;
  margin-right: 20px;
}

.ad {
  display: inline-block;
}
In this example, the container element uses display: flex and align-items: center to horizontally center the table and the ad. The table element and the div with the class ad are set to display: inline-block to make them sit next to each other. The margin-right property on the table element adds some space between the table and the ad.

You can adjust the CSS to suit your specific needs, such as changing the margins, widths, or heights of the elements.





		</style>
</head>
<body>
<div class="container">
  <table>
    <thead>
      <tr>
        <th>Column 1</th>
        <th>Column 2</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Row 1, Column 1</td>
        <td>Row 1, Column 2</td>
      </tr>
      <tr>
        <td>Row 2, Column 1</td>
        <td>Row 2, Column 2</td>
      </tr>
    </tbody>
  </table>
  <div class="ad">
    <img src="ad-image.jpg" alt="Advertisement">
  </div>
</div>
</body>
</html>