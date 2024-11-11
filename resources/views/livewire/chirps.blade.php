<div class="container d-flex justify-content-center">
    <div class="w-100" style="max-width: 50%;">
        <h2 class="my-3 text-center">Chirper</h2>


        <div class="mb-3">
            <input type="text" class="form-control mb-2" wire:model="username" placeholder="Nome do usuário" />
            @error('username')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" wire:model="message" placeholder="Escreva seu chirp"></textarea>
            @error('message')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn mb-4 w-100" wire:click="addChirp">Enviar</button>


        <ul class="list-group">
            @foreach ($chirps as $chirp)
            <li class="list-group-item">
                <div>
                    <strong>{{ $chirp->message }}</strong>
                    <br />
                    <small class="text-muted">ID: {{ $chirp->id }} - {{ $chirp->created_at->diffForHumans()
                        }}</small>
                    <br />
                    <span class="text-secondary">Postado por - {{ $chirp->username }}</span>
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-sm  me-2" wire:click="edit({{ $chirp->id }})">Editar</button>
                    <button class="btn btn-sm " wire:click="delete({{ $chirp->id }})"
                        onclick="return confirm('Tem certeza que deseja excluir este chirp?')">Excluir</button>
                </div>
            </li>
            @endforeach
        </ul>


        @if($chirpId)
        <h3 class="my-3 text-center">Editar Chirp</h3>
        <form wire:submit.prevent="update" class="mb-4">
            <div class="mb-3">
                <label><strong>ID:</strong> {{ $chirpId }}</label>
                <br />
                <label><strong>Usuário:</strong> {{ $username }}</label>
            </div>
            <div class="mb-3">
                <textarea class="form-control" wire:model="message" placeholder="Editar mensagem"></textarea>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn  w-100">Salvar</button>
        </form>
        @endif
    </div>
</div>