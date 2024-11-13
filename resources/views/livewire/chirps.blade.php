<div class="container d-flex justify-content-center">
    <div class="w-100" style="max-width: 50%;">
        <div class=" my-5 border border-primary p-3 rounded">
            <h3 class=" text-start">
                <img src="https://img.icons8.com/ios-filled/50/000000/cloud.png" alt="Cloud Icon"
                    style="width: 24px; height: 24px; margin-right: 8px;">
                Escreva seu chirp!
            </h3>


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
            <button class="btn btn-primary mb-3 w-100" wire:click="addChirp">Enviar</button>
        </div>
        <div class=" my-5 border border-primary p-3 rounded">
            <h3 class="text-start"> <img src="https://img.icons8.com/?size=64&id=48272&format=png"
                    alt="Feed de atividade" style="width: 35px; height: 35px; margin-right: 8px;"> FEED</h3>
            <ul class="list-group text-start">
                @foreach ($chirps as $chirp)
                <li class="list-group-item border border-primary p-3 rounded mb-1">
                    <div>
                        <strong>{{ $chirp->message }}</strong>
                        <br />
                        <small class="text-muted">ID: {{ $chirp->id }} - {{ $chirp->created_at->diffForHumans()
                            }}</small>
                        <br />
                        <span class="text-secondary">Postado por - {{ $chirp->username }}</span>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <button class="btn btn-secondary btn-sm  me-2"
                            wire:click="edit({{ $chirp->id }})">Editar</button>
                        <button class="btn  btn-danger btn-sm " wire:click="delete({{ $chirp->id }})"
                            onclick="return confirm('Tem certeza que deseja excluir este chirp?')">Excluir</button>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>


        @if($chirpId)
        <div class=" my-5 border border-primary p-3 rounded">
            <h4 class="text-start ">
                <img src="https://img.icons8.com/?size=64&id=47749&format=png" alt="Editar"
                    style="width: 24px; height: 24px; margin-right: 8px;"> Editar Chirp
            </h4>
            <form wire:submit.prevent="update" class="mb-4 text-start">
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
                <button type="submit" class="btn btn-success w-100">Salvar</button>
            </form>
        </div>
        @endif
    </div>
</div>