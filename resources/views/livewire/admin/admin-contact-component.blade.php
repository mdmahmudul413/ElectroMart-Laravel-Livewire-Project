<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact Messages
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>                                
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th style="width: 46%;">Comment</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>                                        
                                        <td>{{ $contact->phone }}</td>                                        
                                        <td>{{ $contact->comment }}</td>                                        
                                        <td>{{ Carbon\Carbon::parse($contact->created_at)->format('d F Y g:i A') }}</td>  
                                                                              
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pagination-info">
            {{$contacts->links()}}
        </div>
    </div>
</div>
