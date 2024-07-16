<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artworks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">img</th>
    </tr>
  </thead>
  <tbody>
  <?php if (isset($results['data']) && is_array($results['data'])): ?>
             
            <?php $no=1;
                 foreach ($results['data'] as $artwork): ?>
              <tr>
                <td><?= $no++;?></td>
                <td><?= esc($artwork['title']) ?></td>
                <td><img src="https://www.artic.edu/iiif/2/<?= esc($artwork['id']) ?>/full/843,/0/default.jpg" alt="<?= esc($artwork['title']) ?>" /></td>
              </tr>
            <?php endforeach; ?>
       
    <?php else: ?>
        <p>No artworks found.</p>
    <?php endif; ?> 

  </tbody>
</table>

    <!-- <?php if (isset($results['data']) && is_array($results['data'])): ?>
        <ul>
            <?php foreach ($results['data'] as $artwork): ?>
                <li>
                    <h2><?= esc($artwork['title']) ?></h2>
                    
                    <img src="https://www.artic.edu/iiif/2/<?= esc($artwork['id']) ?>/full/843,/0/default.jpg" alt="<?= esc($artwork['title']) ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No artworks found.</p>
    <?php endif; ?> -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
