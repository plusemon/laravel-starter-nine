 <!-- Modal -->
 <div class="modal fade" id="createNewItemModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <form action="{{ route('accounts.subscribers.store') }}" method="POST">
                 <div class="modal-header">
                     <h5 class="modal-title">{{ $title }}</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     @csrf
                     <div class="mb-2">
                         <label>Email</label>
                         <input type="email" name="email" placeholder="example@gmail.com" class="form-control">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
