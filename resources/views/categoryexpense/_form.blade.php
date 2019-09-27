@csrf
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
    <div class="col-sm-10">
        <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ old('name', $category->name) }}">
    </div>
</div>    
<div class="form-group row">
    <label for="date" class="col-sm-2 col-form-label">Fecha:</label>
    <div class="col-sm-10">
        <input name="date" type="date" class="form-control" placeholder="dd/mm/aaaa" value="{{ old('date', $category->date) }}">
    </div>
</div>
<button type="submit" class="btn btn-outline-primary">{{$btnText}}</button>  