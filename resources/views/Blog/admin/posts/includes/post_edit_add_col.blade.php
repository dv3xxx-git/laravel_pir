<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if ($items->exists)
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="list-unstyled">
                    <li>ID: {{ $items->id }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Создано</label>
                    <input type="text" value="{{ $items->title }}" class="form-controll" minlength="3" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Изменено</label>
                    <input type="text" value="{{ $items->title }}" class="form-controll" minlength="3" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Удалено</label>
                    <input type="text" value="{{ $items->title }}" class="form-controll" minlength="3" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
