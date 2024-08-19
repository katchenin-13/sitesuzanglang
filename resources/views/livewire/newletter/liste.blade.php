<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card  card card-primary">
              <div class="card-header  d-flex align-items-center"  style="background-color: #64350d !important;">
                <h3 class="card-title flex-grow-1"><i class="fas fa-list fa-2x"></i> Liste des des newletters</h3>

                <div class="card-tools d-flex align-items-center ">
                <a class="btn  text-white mr-4 d-block" wire:click.prevent='ExportIntoExcel()' ><i class="fas fa-list fa-2x"></i> Exporter la liste des newletters</a>
                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search"  wire:model.debounce.700ms="search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 table-striped" style="height: 350px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th style="width:20%;">Nom</th>
                      <th style="width:30%;" >Adresse</th>
                      <th style="width:20%;" class="text-center">Ajouté</th>
                      <th style="width:30%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
            
                     
                   @forelse($newletters as $newletter)
                      <tr>
                        <td>{{ $newletter->nom}}</td>
                        <td>{{$newletter->adresse}} </td>
                        <td class="text-center"><span class="tag tag-success">{{ $newletter->created_at->diffForHumans() }}</span></td>
                        <td class="text-center">
                          <button class="btn btn-link" wire:click="confirmDelete('{{ $newletter->nom }}', {{$newletter->id}})"> <i class="far fa-trash-alt"></i> </button>
                        </td>
                      </tr>
                    @empty
                      <tr>
                          <td colspan="6">
                              <div class="alert alert-danger">
      
                                  <h5><i class="icon fas fa-ban"></i> Information!</h5>
                                  Aucune donnée trouvée par rapport aux éléments de recherche entrés.
                                  </div>
                          </td>
                      </tr>
                   @endforelse
                    
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                    {{ $newletters->links() }}
                   <!-- Pargination-->
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>


