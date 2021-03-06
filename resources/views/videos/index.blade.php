@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Videos </div>
                <div class="table-responsive">


                    <table class="table">
                        <tr>

                            <td>Usuário</td>
                            <td>Texto</td>
                            <td>Mp4</td>
                            <td>Imagem</td>
                            <td>Ações</td>
                        </tr>
                    @foreach($videos as $video)
                        <tr>

                            <td>{{$video->nome}}</td>
                            <td><?php echo $video->texto ?></td>
                            <td>{{$video->mp4}}</td>
                            <td><img src="public/storage/app/upload/<?php echo $video->imagem ?> ">
                                </td> 
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo 'd'.$video->id ?>">Editar</button> </td>

             
                        </tr>

                        <div id="<?php echo 'd'.$video->id ?>" class="modal fade bs-example" role="dialog" data-backdrop="static">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div> <!-- Fim de ModaL Header-->
       <form action="{{URL::to('/update')}}"  method="post" class="form-horizontal" enctype="multipart/form-data">

      <div class="modal-body">

        <input type="hidden" name="_token" value="{{csrf_token()}}" >

                     <div class="form-group">
                        <div class="col-sm-12">
                            <strong>MP4:</strong>
                            <div class="input-group">
                                <span data-toggle="tooltip" title="Nº da licitação" class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="file" maxlength="254" class="form-control" name="mp4"  id="mp4">
                            </div>       
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                            <strong>Imagem:</strong>
                            <div class="input-group">
                                <span data-toggle="tooltip" title="Nº da licitação" class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="file" maxlength="254" class="form-control" name="imagem"  id="imagem">
                            </div>       
                        </div>
                    </div>
                 
        <textarea required="" class="editor" name="texto">{{$video->texto}}</textarea>
                  
        <input type="hidden" id="id" name="id" value="{{$video->id}}">

      </div> <!-- Fim de ModaL Body-->

      <div class="modal-footer">
        <button type="submit" class="btn btn-action btn-success add" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp Aguarde...">Salvar
        </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">
         Cancelar
        </button>
                </form>

      </div> <!-- Fim de ModaL Footer-->

    </div> <!-- Fim de ModaL Content-->

  </div> <!-- Fim de ModaL Dialog-->




                    @endforeach

                    </table>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Cadastrar
                </button>
                </div>            
        
            </div>
        </div>


    </div>


</div>




<div id="exampleModal" class="modal fade bs-example" role="dialog" data-backdrop="static">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div> <!-- Fim de ModaL Header-->
       <form action="{{URL::to('/store')}}"  method="post" class="form-horizontal" enctype="multipart/form-data">

      <div class="modal-body">

        <input type="hidden" name="_token" value="{{csrf_token()}}" >

                     <div class="form-group">
                        <div class="col-sm-12">
                            <strong>MP4:</strong>
                            <div class="input-group">
                                <span data-toggle="tooltip" title="Nº da licitação" class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="file" maxlength="254" class="form-control" name="mp4"  id="mp4">
                            </div>       
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                            <strong>Imagem:</strong>
                            <div class="input-group">
                                <span data-toggle="tooltip" title="Nº da licitação" class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="file" maxlength="254" class="form-control" name="imagem"  id="imagem">
                            </div>       
                        </div>
                    </div>

                 
        <textarea required="" class="editor" name="texto" ></textarea>

                  
                            <input type="hidden" id="id" name="id">

      </div> <!-- Fim de ModaL Body-->

      <div class="modal-footer">
        <button type="submit" class="btn btn-action btn-success add" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp Aguarde...">Salvar
        </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">
         Cancelar
        </button>
                </form>

      </div> <!-- Fim de ModaL Footer-->

    </div> <!-- Fim de ModaL Content-->

  </div> <!-- Fim de ModaL Dialog-->


<script type="text/javascript">
            $(".editor").jqte();
    </script>
@endsection