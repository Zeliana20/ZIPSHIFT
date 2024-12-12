<!DOCTYPE html>
<html>
  <body>
    <?php
    $i = 1;
    $nama = [ 
        '235150700111044' => 'azzel', 
        '235150700111045' => 'amel', 
        '235150700111046' => 'nawa'
    ];
    ?>
    <table border="1">
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>NIM</th>
      </tr>

      <?php foreach ($nama as $a => $nim) : ?>
      <tr style="background-color: <?php echo $i % 2 == 0 ? 'red' : 'blue'; ?>">
        <td><?php echo $i++; ?></td>
        <td><?php echo $nim; ?></td>
        <td><?php echo $a; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
