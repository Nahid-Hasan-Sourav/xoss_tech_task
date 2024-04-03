@extends('backend.master')

@section('body')
    <div class="container">
        <div class="p-3 row justify-content-end">
            <a href="{{ route('post.create') }}" class="btn btn-md btn-success">CREATE NEW POST</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                  
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection