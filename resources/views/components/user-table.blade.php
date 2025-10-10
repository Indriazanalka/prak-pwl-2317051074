<div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-blue-600 text-black">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">NPM</th>
                    <th class="px-4 py-2 border">Kelas</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-4 py-2 border text-center">{{ $user->id }}</td>
                        <td class="px-4 py-2 border">{{ $user->nama }}</td>
                        <td class="px-4 py-2 border">{{ $user->nim }}</td>
                        <td class="px-4 py-2 border">{{ $user->nama_kelas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>