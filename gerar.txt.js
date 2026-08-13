document.getElementById('btnSalvar').addEventListener('click', function()
{
    const texto = document.getElementById('conteudo').value;
    const blob = new Blob([texto], { type: 'text/plain'});
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.style.display = "none";
    a.href = url;
    a.download = "arquivo.txt";
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
    document.body.removeChild(a);
});