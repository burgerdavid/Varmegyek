<div style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 10px; text-align: center;">
    <h1 style="color: #333; margin-bottom: 20px; font-style: italic;">Új vármegye hozzáadása</h1>
    <form action="{{ route('counties/store') }}" method="post" style="margin-bottom: 30px;">
        @csrf
        <label for="name" style="float:left; display: block; margin-bottom: 10px;">Név:</label>
        <input type="text" name="name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; margin-bottom: 10px;">

        <button type="submit" style="background-color: green; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; float: left; margin-bottom:15px;">Mentés</button>
        <a href="{{ route('county/index') }}" class="btn btn-secondary" style="text-decoration: none; color: #fff; background-color: red; padding: 9px 20px; border: none; border-radius: 5px; float:left; margin-left: 15px; margin-bottom: 10px;">Mégse</a>
    </form>
</div>
