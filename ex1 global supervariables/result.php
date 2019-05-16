
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
      <table>
          <tr>
                <td class="title">Top 5 favorite movies</td>
                <td class="title">Top 5 favorite shows</td>
                <td class="title">Favorite country</td>
                <td class="title">Worst movie</td>
          </tr>
          <tr>
                <td><?php echo $_POST['movie1']?></td>
                <td><?php echo $_POST['show1']?></td>
                <td><?php echo $_POST['country']?></td>
                <td><?php echo $_POST['worst']?></td>
          </tr>
          <tr>
                <td><?php echo $_POST['movie2']?></td>
                <td><?php echo $_POST['show2']?></td>
          </tr>
          <tr>
                <td><?php echo $_POST['movie3']?></td>
                <td><?php echo $_POST['show3']?></td> 
          </tr>
          <tr>
                <td><?php echo $_POST['movie4']?></td>
                <td><?php echo $_POST['show4']?></td>
          </tr>
          <tr>
                <td><?php echo $_POST['movie5']?></td>
                <td><?php echo $_POST['show5']?></td>
          </tr>
      </table>

      <form action="setup.php" method="post">
         <input class="submit" type="submit" name="submit2" value="back">
      </form>

  </body>
</html>