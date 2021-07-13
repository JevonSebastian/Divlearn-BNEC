<x-app-login>
    <x-slot name="navbar">
        <div class="bg-colour" style="height: 100vh">
            <div class="container my-5 py-5">

                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table-secondary">
                            <th class="align-middle text-cente">Team</th>
                            <th class="align-middle text-center">Institution</th>
                            <th class="align-middle text-center">Score</th>
                            <th class="align-middle text-center">Year</th>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($pastChampions as $pastChampion)
                            <tr>
                                <td class="align-middle text-center">{{ $pastChampion->team }}</td>
                                <td class="align-middle text-center">{{ $pastChampion->institution }}</td>
                                <td class="align-middle text-center">{{ $pastChampion->score }}</td>
                                <td class="align-middle text-center">{{ $pastChampion->year }}</td>
                                {{-- <td class="align-middle text-center">{{ $pastChampion->address }}</td>
        
                                <td class="align-middle text-center">
                                    @if ($participant->is_registered == false)
                                    Not Registered
                                    @else
                                    Registered
                                    @endif
                                </td>
                                <td class="align-middle text-center">{{ $participant->created_at }}</td>
                                <td class="align-middle text-center">{{ $participant->updated_at }}</td>
                                <td class="align-middle text-center">
                                    <a class="btn btn-sm btn-block btn-primary text-white" target="_blank"
                                        href="/storage/img/{{ $participant->photo_profile }}">L</a>
                                </td> --}}
        
                                {{-- <td class="align-middle text-center">
                                    <a class="btn btn-sm btn-block btn-warning text-white"
                                        href="{{ route('view-update-participant', $participant->id) }}">U</a>
                                </td>
                                <td class="align-middle text-center">
                                    <form method="POST" action="{{ route('delete-participant', $participant->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value='DELETE'>
                                        <button type="submit" class="btn btn-sm btn-block btn-danger text-white">D</button>
                                    </form>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

</x-app-login>