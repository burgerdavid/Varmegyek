<div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 10px;">
    <h1 style="color: #333; text-align: center; font-style: italic;">Vármegyék lista</h1>
    <a href="{{ route('county/create') }}" class="btn btn-success" style="float: right; text-decoration: none; color: #fff; background-color: green; padding: 10px; border-radius: 5px;">Új vármegye</a>
    <form action="{{ route('county/filter') }}" method="post" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="filter" placeholder="Vármegyék szűrés..." style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        <button type="submit" style=" margin-left: 10px; margin-right: 10px; padding: 12px 15px; background-color: grey; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Szűrés</button>
    </form>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: blue; color: #fff;">
                <th style="padding: 10px;">Vármegye</th>
                <th style="padding: 10px;">Módosítás</th>
                <th style="padding: 10px;">Törlés</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($counties as $county)
                <tr style="background-color: #fff;">
                    <td style="padding: 10px;">{{ $county->name }}</td>
                    <td style="padding: 10px;"><a href="{{ route('county/edit', $county) }}" class="btn btn-info" style="text-decoration: none; color: #fff; background-color: #007bff; padding: 5px 10px; border-radius: 5px; ">Módosítás</a></td>
                    <td style="padding: 10px;">
                        <form action="{{ route('county/destroy', $county) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="padding: 5px 10px; background-color: red; color: #fff; border: none; border-radius: 5px; cursor: pointer;" onclick="return confirm('Biztosan törölni szeretné?')">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
