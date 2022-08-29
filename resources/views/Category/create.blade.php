


<x-layout>

<form action="{{route('Category.store')}}" method="POST">
    @csrf
<div class="rwo">
    <div class="col-6 form-group">
        <strong>
            Category Name :
        </strong>
        <input type="text" name="name" class="form-control">
        @error('name')
        <div class="alert alert-danger mt-1 mb-1" >
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="col-6 " style="margin-top: 20px">
        <strong>
            Category Slug :
        </strong>
        <input type="text" name="slug" class="form-control">
        @error('slug')
        <div class="alert alert-danger mt-1 mb-1" >
            {{$message}}
        </div>
        @enderror


    </div>
</div>
    <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 20px">
       Create Category
    </button>
</form>
</x-layout>
