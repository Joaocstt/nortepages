<div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Opa, parece que alguém deseja saber um orçamento!</h1>

    <p class="mb-4 mt-2">Recebemos uma mensagem de <strong>{{ $data['name'] }}</strong> ({{ $data['email'] }}) solicitando o seguinte serviço: <strong>{{ $data['services'] }}</strong></p>

    <p class="mb-4">Segue a mensagem:</p>

    <p class="mb-4">{{ $data['content'] }}</p>
</div>
