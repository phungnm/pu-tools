
@extends('layouts.default')
@section('content')
<div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Baconheo tools - Access logs</h5>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12">

                 <table id="access-table" class="table table-striped table-bordered" style="width:100%">
                   <thead>
              <tr>
                <th>IP</th>
                <th>Site</th>
                <th>Path</th>
                <th>Time</th>
              </tr>
              </thead>
           <tbody>
               @foreach ($accesses as $access)
                    <tr>
                <td>{{ $access->ip }}</td>
                <td>{{ $access->site }}</td>
                 <td>{{ $access->path }}</td>
                <td>{{ $access->created_at }}</td>
                 
              </tr>
        @endforeach

      </tbody>
            </table>



          </div>
          </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
    
@stop

