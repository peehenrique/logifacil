
<?php if ($clientes){ ?>
  <section class="faq">
    <div class="row">
      <div class="col-xl-12 col-md-12 col-12">
        <div class="card">
          <div class="card-body">
            <h4>Resultados para: <?php echo $this->input->get('codigo_rastreio') ?></h4>


            <table class="table table-striped mt-2">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Empresa</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Endereco</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($clientes as $cliente): ?>

                  <tr>
                    <th scope="row"><?php echo $cliente->userid ?></th>
                    <td><?php echo $cliente->company ?></td>
                    <td><?php echo $cliente->phonenumber ?></td>
                    <td><?php echo $cliente->address ?></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>


          </div>
        </div>
      </div>

    </div>
  </section>

<?php }else{ ?>

  <section class="faq">
    <div class="row">
      <div class="col-xl-12 col-md-12 col-12">
        <div class="card">
          <div class="card-body">
            <h4>Que pena, nao encontramos nenhum resultado</h4>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php } ?>
