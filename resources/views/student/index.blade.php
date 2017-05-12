@extends('layout.docindex_layout')
@section('title', 'Student Document')

@section('sidebar')
    @parent
        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <div class="card-panel hoverable">
                        <h1 class="header center teal-text text-lighten-2 ">Document</h1></div>
                    <div class="row center">
                        <h5 class="header col s12 light"></h5>
                    </div>
                    <div class="row center">
                        <a href="document/create" class="btn-floating btn-large waves-effect waves-light #1e88e5 blue darken-1 cyan pulse"><i class="material-icons">add</i></a>
                    </div>
                   

                </div>
            </div>
            <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 2"></div>
        </div>
        <div class="container ">

            <form>
                <div class="input-field">
                    <input id="search" type="text" required>
                    <label for="search"><i class="material-icons">search</i></label>
                </div>
            </form>


        </div>
    
@endsection

@section('content')
<div class="container">
            <div class="card-panel hoverable">
                <!-- <div class="section"> -->

                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th data-field="id">Project No.</th>
                                <th data-field="name">Project Name</th>
                                <th data-field="status">Status</th>
                                <th data-field="detail">Approve</th>
                                <th data-field="doc">Document</th>
                                <th data-field="cancel">Cancel</th>
                                <th data-field="cancel">Detail</th>

                            </tr>
                        </thead>

                        <tbody>
                            
                      @foreach($documents as $document)
                          @if(Auth::user()->name == $document->created)
                            <tr>
                            @if($document->status_pass1 == 1 && $document->status_pass1 == 1 && $document->status_pass3 == 1 && $document->status_pass4 == 1 && $document->status_pass5 == 1 && $document->status_pass6 == 1 && $document->status_pass7 == 1)
                            <td ><span class=" new badge green left" data-badge-caption="Approve">{{ $document->id }}</span></td>
                            @elseif($document->status_pass1 == 3 || $document->status_pass3 == 3 || $document->status_pass3 == 3 || $document->status_pass4 == 3 || $document->status_pass5 == 3 || $document->status_pass6 == 3 || $document->status_pass7 == 3)
                             <td><span class="new badge blue left" data-badge-caption="Edit/Resubmit">{{ $document->id }}</span></td>
                             @elseif($document->status_pass1 == 2 || $document->status_pass2 == 2 || $document->status_pass2 == 2 || $document->status_pass4 == 2 || $document->status_pass5 == 2 || $document->status_pass6 == 2 || $document->status_pass7 == 2)
                             <td><span class="new badge red left" data-badge-caption="Disapprove">{{ $document->id }}</span></td>
                            @else
                            <td> {{ $document->id }} </td>
                            @endif
                                <td> {{ $document->activity }} </td>
                                <td>
                                  @if($document->status_pass1 == NULL)
                                        <a href="" class="btn-floating  waves-effect waves-light white">
                                        <i class="material-icons md-18 #f60">library_books</i></a>
                                  @elseif($document->status_pass1 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass1 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass1 == 2 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass1 == 3 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif

                                  @if($document->status_pass2 == null)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 icon-no">mode_edit</i></a>
                                  @elseif($document->status_pass2 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass2 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass2 == 2 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass2 == 3 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif

                                  @if($document->status_pass3 == null)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 icon-no">mode_edit</i></a>
                                  @elseif($document->status_pass3 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass3 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass3 == 2 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass3 == 3 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif

                                  @if($document->status_pass4 == null)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 icon-no">mode_edit</i></a>
                                  @elseif($document->status_pass4 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass4 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass4 == 2 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass4 == 3 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif

                                  @if($document->status_pass5 == null)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 icon-no">mode_edit</i></a>
                                  @elseif($document->status_pass5 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass5 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass5 == 2 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass5 == 3 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif

                                  @if($document->status_pass6 == null)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 icon-no">mode_edit</i></a>
                                  @elseif($document->status_pass6 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass6 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass6 == 2 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass6 == 3 )
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif

                                  @if($document->status_pass7 == null)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 icon-no">mode_edit</i></a>
                                  @elseif($document->status_pass7 == 0)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 blue lighten-4">query_builder</i></a>
                                  @elseif( $document->status_pass7 == 1)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 green">done</i></a>
                                  @elseif ($document->status_pass7 == 2)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 red">not_interested</i></a>
                                  @elseif ($document->status_pass7 == 3)
                                        <a href="" class="btn-floating  waves-effect waves-light white"><i class="material-icons md-18 yellow">mode_edit</i></a>
                                  @endif
                           
                                    
                                
                                <td>
                                <a href="{{ route('document.edit',$document->id) }}" class="btn-floating  waves-effect waves-light pink"><i class="material-icons md-18 icon-white  ">reorder</i></a>
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </td>
                                
                                <td><a href="http://materializecss.com/bin/materialize-v0.98.0.zip" class="btn-floating  waves-effect waves-light blue btn waves-effect waves-light" id="download-source"><i class="material-icons md-18 icon-white ">file_download</i></a></td>

                                <!-- Delete function-->
                                @if ($document->status_pass1 == 2 || $document->status_pass2 == 2 || $document->status_pass3 == 2 || $document->status_pass4 == 2|| $document->status_pass5 == 2|| $document->status_pass6 == 2|| $document->status_pass7 == 2)
                                <td><a href="document/delete/{{ $document->id }}" class="btn-floating  waves-effect waves-light red" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="delete"><i class="material-icons md-18 icon-white    " name="name" value="delete">delete</i></a>
                                </td>
                                @elseif ($document->status_pass1 != 2 || $document->status_pass2 != 2 || $document->status_pass3 != 2 || $document->status_pass4 != 2|| $document->status_pass5 != 2|| $document->status_pass6 != 2|| $document->status_pass7 != 2)
                                <td><a href="document/delete/{{ $document->id }}" class="btn-floating  waves-effect waves-light red" disabled>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="delete"><i class="material-icons md-18 icon-white    " name="name" value="delete">delete</i></a>
                                </td>
                                @endif

                                <td><a href="{{ route('document.show',$document->id) }}" class="btn-floating  waves-effect waves-light pink" ><i class="material-icons md-18 icon-white  ">reorder</i></a>
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></td>


                                 <!-- all approve -->
                                 <!-- <td>
                                   
                                 </td> -->
                            </tr>
                          @elseif(Auth::user()->name != $document->created)
                          <!-- <h4 class="header center  text amber-text ">You do not have a project.</h4> -->
                          @endif
                            @endforeach
                        </tbody>
                    </table>

                    <!--   Icon Section   -->
                   <!--  <div class="row">
                       <div class="col s12 m4">
                   
                       </div>
                   </div>
                   
                   <div class="col s12 m4">
                       <div class="icon-block">
                   
                       </div>
                   </div>
                   
                   <div class="col s12 m4">
                       <div class="icon-block">
                   
                       </div>
                   </div> -->
                <!-- </div> -->

            </div>
        </div>

@endsection
@section('footer')
@parent
@endsection
