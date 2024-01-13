<div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Opa! João</h1>

    <p class="mb-4">Recebemos uma mensagem de <strong>{{ $data['name'] }}</strong> ({{ $data['email'] }}) com o seguinte assunto: <strong>{{ $data['subject'] }}</strong></p>

    <p class="mb-4">Telefone: <strong>{{ $data['telephone'] }}</strong></p>

    <p class="mb-4">Segue a mensagem:</p>

    <p class="mb-4">{{ $data['content'] }}</p>
</div>
