<div class="timeline">
  <?php if ($this->session->userdata('nombre')!='') {?>
    <br>
      <button type="button" class="agregar float-right" data-toggle="modal" data-target="#myModal2">Agregar una publicaci&oacute;n</button>
    <br>
    <br>
  <?php } ?>

  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="fixed-top">
            <button type="button" class="btn btn-dark" data-dismiss="modal">x</button>
        </div>

        <br>

        <div class="modal-body border-rounded my-1 p-4">
          <h4 class="text-center font-weight-bold">Agregar una publicaci&oacute;n</h4>

          <form action="<?=base_url();?>index.php/Principal/publicar" method="POST">
            <div class="form-group">
              <textarea name="post" id="post" class="rounded-0 form-control" cols="40" rows="2" style="resize:none;" placeholder="Agrega una publicaci&oacute;n..." required=""></textarea>
            </div>
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-secondary btn-lg active">Publicar  <i class="fas fa-pen-nib"></i></button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php if ($posts != FALSE) {?>

    <?php if ((count($posts->result())%2)== 0) {?>

      <?php for ($i=0; $i<count($posts->result()); $i+=2){?>
        <?php $row = $posts->row($i); ?>

        <div class="post">
          <div class="container left">
            <div class="content">
              <h2><?php echo $row->nombre; ?></h2>
              <p><?php echo $row->contenido; ?></p>
              <p><i class="fas fa-clock"></i>  <?php echo $row->fecha ?></p>
              <hr>
              <div class="comentario">
                <?php if($comentarios != FALSE){ ?>
                  <?php foreach ($comentarios->result() as $row2) { ?>
                    <?php if($row->idPost == $row2->idPost){ ?>
                      <div>
                        <h6 class="h6-responsive font-weight-bold"><?php echo $row2->nombre; ?></h6>
                        <p><?php echo $row2->contenido; ?></p>
                      </div>
                      <hr>
                    <?php } ?>
                  <?php } ?>  
                <?php } ?>
              </div>

              <?php if ($this->session->userdata('nombre')!='') {?>
                  <form action="<?=base_url();?>index.php/Principal/comentar/<?=$row->idPost?>" class="mx-2 mt-1 py-1" method="POST">
                    <textarea name="comentario" id="comentario" class="form-control" cols="40" rows="2" placeholder="Escribe un comentario..." required=""></textarea>
                    <button class="btn btn-dark waves-light  d-block mr-auto ml-auto waves-effect" type="submit">Comentar <i class="fas fa-comment-alt"></i></button>
                  </form>
              <?php } ?>
            </div>
          </div>
        </div>

        <?php $row = $posts->row($i+1);?>

        <div class="post">
          <div class="container right">
            <div class="content">
              <h2><?php echo $row->nombre; ?></h2>
              <p><?php echo $row->contenido; ?></p>
              <p><i class="fas fa-clock"></i>  <?php echo $row->fecha ?></p>
              <hr>
              <div class="comentario">
                <?php if($comentarios != FALSE){ ?>
                  <?php foreach ($comentarios->result() as $row2) { ?>
                    <?php if($row->idPost == $row2->idPost){ ?>
                      <div>
                        <h6 class="h6-responsive font-weight-bold"><?php echo $row2->nombre; ?></h6>
                        <p><?php echo $row2->contenido; ?></p>
                      </div>
                      <hr>
                    <?php } ?>
                  <?php } ?>  
                <?php } ?>
              </div>

              <?php if ($this->session->userdata('nombre')!='') {?>
                  <form action="<?=base_url();?>index.php/Principal/comentar/<?=$row->idPost?>" class="mx-2 mt-1 py-1" method="POST">
                    <textarea name="comentario" id="comentario" class="form-control" cols="40" rows="2" placeholder="Escribe un comentario..." required=""></textarea>
                    <button class="btn btn-dark waves-light  d-block mr-auto ml-auto waves-effect" type="submit">Comentar <i class="fas fa-comment-alt"></i></button>
                  </form>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php }?>

    <?php  } else {?>

      <?php for ($i=0; $i<(count($posts->result())-1); $i+=2){?>
        <?php $row = $posts->row($i); ?>

        <div class="post">
          <div class="container left">
            <div class="content">
              <h2><?php echo $row->nombre; ?></h2>
              <p><?php echo $row->contenido; ?></p>
              <p><i class="fas fa-clock"></i>  <?php echo $row->fecha ?></p>
              <hr>
              <div class="comentario">
                <?php if($comentarios != FALSE){ ?>
                  <?php foreach ($comentarios->result() as $row2) { ?>
                    <?php if($row->idPost == $row2->idPost){ ?>
                      <div>
                        <h6 class="h6-responsive font-weight-bold"><?php echo $row2->nombre; ?></h6>
                        <p><?php echo $row2->contenido; ?></p>
                      </div>
                      <hr>
                    <?php } ?>
                  <?php } ?>  
                <?php } ?>
              </div>

              <?php if ($this->session->userdata('nombre')!='') {?>
                  <form action="<?=base_url();?>index.php/Principal/comentar/<?=$row->idPost?>" class="mx-2 mt-1 py-1" method="POST">
                    <textarea name="comentario" id="comentario" class="form-control" cols="40" rows="2" placeholder="Escribe un comentario..." required=""></textarea>
                    <button class="btn btn-dark waves-light  d-block mr-auto ml-auto waves-effect" type="submit">Comentar <i class="fas fa-comment-alt"></i></button>
                  </form>
              <?php } ?>
            </div>
          </div>
        </div>

        <?php $row = $posts->row($i+1);?>

        <div class="post">
          <div class="container right">
            <div class="content">
              <h2><?php echo $row->nombre; ?></h2>
              <p><?php echo $row->contenido; ?></p>
              <p><i class="fas fa-clock"></i>  <?php echo $row->fecha ?></p>
              <hr>
              <div class="comentario">
                <?php if($comentarios != FALSE){ ?>
                  <?php foreach ($comentarios->result() as $row2) { ?>
                    <?php if($row->idPost == $row2->idPost){ ?>
                      <div>
                        <h6 class="h6-responsive font-weight-bold"><?php echo $row2->nombre; ?></h6>
                        <p><?php echo $row2->contenido; ?></p>
                      </div>
                      <hr>
                    <?php } ?>
                  <?php } ?>  
                <?php } ?>
              </div>

              <?php if ($this->session->userdata('nombre')!='') {?>
                  <form action="<?=base_url();?>index.php/Principal/comentar/<?=$row->idPost?>" class="mx-2 mt-1 py-1" method="POST">
                    <textarea name="comentario" id="comentario" class="form-control" cols="40" rows="2" placeholder="Escribe un comentario..." required=""></textarea>
                    <button class="btn btn-dark waves-light  d-block mr-auto ml-auto waves-effect" type="submit">Comentar <i class="fas fa-comment-alt"></i></button>
                  </form>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php }?>

      <?php $row = $posts->last_row();?>

      <div class="post">
        <div class="container left">
            <div class="content">
              <h2><?php echo $row->nombre; ?></h2>
              <p><?php echo $row->contenido; ?></p>
              <p><i class="fas fa-clock"></i>  <?php echo $row->fecha ?></p>
              <hr>
              <div class="comentario">
                <?php if($comentarios != FALSE){ ?>
                  <?php foreach ($comentarios->result() as $row2) { ?>
                    <?php if($row->idPost == $row2->idPost){ ?>
                      <div>
                        <h6 class="h6-responsive font-weight-bold"><?php echo $row2->nombre; ?></h6>
                        <p><?php echo $row2->contenido; ?></p>
                      </div>
                      <hr>
                    <?php } ?>
                  <?php } ?>  
                <?php } ?>
              </div>

              <?php if ($this->session->userdata('nombre')!='') {?>
                  <form action="<?=base_url();?>index.php/Principal/comentar/<?=$row->idPost?>" class="mx-2 mt-1 py-1" method="POST">
                    <textarea name="comentario" id="comentario" class="form-control" cols="40" rows="2" placeholder="Escribe un comentario..." required=""></textarea>
                    <button class="btn btn-dark waves-light  d-block mr-auto ml-auto waves-effect" type="submit">Comentar <i class="fas fa-comment-alt"></i></button>
                  </form>
              <?php } ?>
            </div>
          </div>
        </div>
    <?php }?>
  <?php }?>
</div>
