<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
  <style>
   table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-family: Arial, sans-serif;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

a {
  text-decoration: none;
  color: #007bff;
  transition: color 0.2s ease-in-out;
}

a:hover {
  color: #0056b3;
}

tr:hover {
  background-color: #f5f5f5;
}

/* Styling for Delete link specifically */
.delete-link {
  color: #ff6347; /* Tomato red for delete link for better visibility as a caution */
}
  </style>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['did']; ?></td>
      <td><?php echo $file['dname']; ?></td>
      <td><?php echo floor($file['dsize'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="docdownload.php?file_id=<?php echo $file['did'] ?>">Download</a> 
    </tr>
  <?php endforeach;?>
</tbody>
</table>

</body>
</html>