<div class="row p-4 pt-5 ">
    <div class="col-md-10 ">
        <!-- general form elements -->
        <div class="card card-primary">
                <div class="card-header" style="background-color: #64350d !important;" >
                  <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de modifiction d'un service </h3>
                </div><!-- /.card-header -->
                    <!-- form start -->
                <form role="form" wire:submit.prevent=" updateService({{$edit_id}})">
                       @csrf             
                    <div class="col-md-12">
                        <div class="card-body">
                          <div class="form-group">
                              <label class="control-label" >Titre</label>
                              <div class="col-md-12" wire:ignore >
                                    <input id="edit_titre" class="form-control @error('edit_titre') is-invalid @enderror"  wire:model="edit_titre">
                                   
                              </div>
                              @error("edit_titre")
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="form-group">
                            <label class="control-label" >Extrait</label>
                            <div class="col-md-12" wire:ignore >
                              <textarea id="edit_extrait" class="form-control @error('edit_extrait') is-invalid @enderror"  wire:model="edit_extrait">
                              </textarea>
                              {{-- <textarea id="edit_extrait" class="form-control @error('edit_extrait') is-invalid @enderror"  wire:model="edit_extrait">
                                </textarea>   --}}
                            </div>
                            @error("edit_extrait")
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                          <div class="form-group">
                              <label class="control-label" >Contenu</label>
                              <div class="col-md-12" wire:ignore >
                                <textarea id="edit_contenu" class="form-control @error('edit_contenu') is-invalid @enderror"  wire:model="edit_contenu">
                                  </textarea>  
                              </div>
                              @error("edit_contenu")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          {{-- <div class="p-4" >

                            <div class="custom-file mt-3">
                              <input type="file" wire:model='new_imageUrl' class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                          @if ($new_imageUrl)
                          <img src="{{$new_imageUrl->temporaryUrl()}}" style="width: 200px;height:200px;" alt="">
                          @else
                          <img src="{{ asset('storage') }}/{{$old_imageUrl}}" style="width: 200px;height:200px;" alt="">
                          @endif
                          <input type="hidden" wire:model='old_imageUrl' name="" id="">
                      </div> --}}
                            {{-- <div class="form-group">
                                <input type="file"  wire:model="editPhoto" >
                            </div>
                            <div style="border: 1px solid #d0d1d3; border-radius: 20px; height: 200px; width:200px; overflow:hidden;">
                                    @if (isset($editPhoto))

                                        <img src="{{ $editPhoto->temporaryUrl() }}" style="height:200px; width:200px;">

                                    @else

                                    <img src="{{ asset($editClient["imageUrl"]) }}" style="height:200px; width:200px;">

                                    @endif
                            </div>
                            @isset($editPhoto)
                            <div>
                                <button
                                type="button" 
                                class="btn btn-default btn-sm mt-2"
                                wire:click="$set('editPhoto', null)"
                                >Réinitialiser</button>    
                            </div> 
                            @endisset --}}
                 </div>
                        </div> <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">
                              <button type="button" wire:click="goToListService()" class="btn btn-danger">Retouner à la liste des utilisateurs</button>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                          </div><!-- /.card-footer -->
                        </div>
                </form>
        </div><!-- /.card -->
        <!-- /.card -->
    </div>
    </div>
   
</div>