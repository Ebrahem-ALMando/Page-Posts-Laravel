<x-layout>
    <div class="row mb-2">
        <div class="col-lg-12">
       <a class="btn btn-success" href="{{route('Category.create')}}">
                Create Category New
       </a>
        </div>
    </div>
    <table class="table table-bordered-secondary" style="border-color: #1a202c">
        <thead>
    <tr>
    <th>
        Category Name
    </th>
    <th>
        Category Slug
    </th>
    <th>
        Action
    </th>
    </tr>
        </thead>
        <tbody>
        @foreach($categorys as $category)
        <tr>

        <td>
             <h5>  {{$category->name}}</h5>
        </td>
            <td>
                <h5>{{$category->slug}}</h5>

            </td>
            <td>
                <form action="{{route('Category.edit',$category->id)}}" method="GET">
                <button type="submit" class="btn btn-primary btn-sm">
                         Update
                </button> </form>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


    </x-layout>
