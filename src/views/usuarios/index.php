<div class="page-header">
    <h4 class="page-title">Usuários</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="/dashboard">
            <i class="icon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
            <a href="#">Usuários</a>
        </li>
    </ul>
</div>
<div class="page-category">


<div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Lista de Usuários</h4>
                      <a href="/usuarios/novo">
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        >
                        <i class="fa fa-plus"></i>
                        Novo Usuário
                      </button>
                    </a>
                    </div>
                  </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>TIPO</th>
                            <th style="width: 10%">Ações</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>e-mail</th>
                            <th>Tipo</th>
                            <th>Ações</th>
                          </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                          <tr>
                            <td><?= $usuario['id'] ?></td>
                            <td><?= $usuario['name'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= $usuario['role'] ?></td>
                            <td>
                              <div class="form-button-action">
                                <a href="/usuarios/editar/<?= $usuario['id'] ?>">
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </button></a>

                                <a href="/usuarios/excluir/<?= $usuario['id'] ?>">
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-danger"
                                  data-original-title="Remove"
                                >
                                  <i class="fa fa-times"></i>
                                </button></a>
                              </div>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>



















<a href="/usuarios/novo" style="
    display: inline-block;
    margin-bottom: 15px;
    padding: 10px 15px;
    background-color: var(--bordo);
    color: white;
    border-radius: 4px;
    text-decoration: none;
">+ Novo Usuário</a>

<table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: var(--terra-claro);">
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">ID</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Nome</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Email</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Tipo</th>
            <th style="padding: 10px; border-bottom: 1px solid #ccc;">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td style="padding: 8px;"><?= $usuario['id'] ?></td>
            <td style="padding: 8px;"><?= $usuario['name'] ?></td>
            <td style="padding: 8px;"><?= $usuario['email'] ?></td>
            <td style="padding: 8px;"><?= $usuario['role'] ?></td>
            <td style="padding: 8px;">
                <a href="/usuarios/editar/<?= $usuario['id'] ?>" style="margin-right: 8px;">✏️ Editar</a>
                <a href="/usuarios/excluir/<?= $usuario['id'] ?>" onclick="return confirm('Deseja excluir este usuário?')">🗑️ Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
