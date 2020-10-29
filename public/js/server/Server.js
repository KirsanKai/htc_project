class Server {

    constructor(options) {
        this.data = options.data;
        this.url = this.data.server.url;
    }

    async send(options) {
        let response = await fetch(this.url + '/' + options.model + '/' + options.action + '/', {
            method: options.method,
            body: options.body
        });
        if (response.ok) {
            return await response.json();
        } else {
            alert("Ошибка HTTP: " + response.status);
        }
    }
ц
    
}