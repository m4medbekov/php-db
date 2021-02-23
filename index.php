<?php include 'foo.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>Hello, world!</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <button class="btn btn-success mt-2" data-toggle="modal" data-target="#create"><i
            class="fa fa-plus"></i></button>
        <table class="table table-striped table-hover mt-2">
          <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php foreach ($result as $res) { ?>
            <tr>
              <td><?php echo $res->id; ?></td>
              <td><?php echo $res->name; ?></td>
              <td><?php echo $res->email; ?></td>
              <td>
                <a href="?id=<?php echo $res->id; ?>" class="btn btn-success" data-toggle="modal"
                  data-target="#edit<?php echo $res->id; ?>"><i class="fa fa-edit"></i></a>
                <a href="" class="btn btn-danger" data-toggle="modal"
                  data-target="#delete<?php echo $res->id; ?>"><i class="fa fa-trash-alt"></i></a>
              </td>
            </tr>
            <!-- Modal edit -->
            <div class="modal fade" id="edit<?php echo $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Изменить запись</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="?id=<?php echo $res->id; ?>" method="post">
                      <div class="form-group">
                        <small>Имя</small>
                        <input type="text" class="form-control" name="name" value="<?php echo $res->name; ?>">
                      </div>
                      <div class="form-group">
                        <small>Email</small>
                        <input type="text" class="form-control" name="email" value="<?php echo $res->email; ?>">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary" name="edit">Изменить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal edit -->
            <!-- Modal delete -->
            <div class="modal fade" id="delete<?php echo $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?php echo $res->id; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                    <form action="?id=<?php echo $res->id; ?>" method="post">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                      <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal delete -->
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal create -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Добавить запись</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <small>Имя</small>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
              <small>Email</small>
              <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal create -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>