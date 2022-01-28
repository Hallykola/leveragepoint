@extends('layouts.dashBoardframe')
@section('content')
<div class="container-fluid" style="background-color:  #E5E5E5">
    <div class="row py-3">
        <div class="col">
            <h3 style="font-weight: 600;color: #383838;">Support</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="#" class="SupportForm p-3 mb-4">
                @csrf
                <div class="p-4">
                    <div class="form-group py-3">
                        <label for="title" class="labels">Title</label>
                        <input class="form-control SupportFormInput" type="text" name="title">
                    </div>
                    <div class="form-group py-3">
                        <label for="" class="labels">Select Category</label>
                        <select class="form-select" name="category">
                            <option selected>Choose complaint type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="form-group py-3">
                        <label for="description" class="labels">Description of Complaint</label>
                        <textarea class="form-control SupportFormText" type="text" name="description" cols="30" rows="50"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Register Complaint</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection