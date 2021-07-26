@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4 mb-5">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Documents</h3>
                        <span class="text-danger mb-4">Document formats allowed are JPGs, PDFs, DOCs Only <br>  
                            Required Documents are CV, National ID CARD/DRIVERS LIECENSE OR INTERNATIONAL PASSPORT, 
                            Birth Certificate, Primary School Certificate, Secondary School Certificate/Tertiary

                        </span>
                        
                        <form action="{{route('save_document', session('user'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for=""><b>Document</b></label>
                                    <input name="document" type="file" class="form-control" placeholder="Document"  id="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for=""><b>Document Name</b></label>
                                    <input name="document_name" type="text" class="form-control" placeholder="Name of Document"  id="">
                                </div>
                                
                                
                                
                            </div>
                           
                            
                            
                            <button type="submit" class="btn btn-success mb-3">
                                Upload
                            </button>
                        </form>
                        <h2 class="mb-3 mt-3">My Documents</h2>
                        @if ($documents->count() > 0)
                        <div class="row">
                            <div class="table-responsive p-3">
                                <table class="table table-bordered">
                                    <thead>
                                            <tr>
                                                <th>
                                                    S/NO
                                                </th>
                                                <th>
                                                    Document
                                                </th>
                                                <th>
                                                   Document Name
                                                </th>
                                                <th>
                                                   Action
                                                </th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           @foreach ($documents as $document)
                                                <tr>
                                                    <td>
                                                        {{$document->id}}
                                                    </td>
                                                    <td>
                                                        {{$document->id}}
                                                    </td>
                                                    <td>
                                                        {{$document->document_name}}
                                                    </td>
                                                    <td>
                                                        <a href=""><i class=" btn btn-danger icofont icofont-trash"></i></a>
                                                    </td>
                                                </tr>
                                           @endforeach 
                                    </tbody>
                                </table>
                                {{$documents->links()}}
                            </div>
                        </div>
                        @else
                        <p>You have not uploaded any documents yet</p>   
                        @endif
                     
                     
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
@include('master.footer')