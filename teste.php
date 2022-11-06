
<link rel="stylesheet" href="/style.css">
<div class="container">
	<!-- code here -->
	<div class="card">
		<div class="card-image">
		</div>
		<form class="card-form" action= "" method="GET">
            <h2>Conexão</h2>
			<div class="input">
				<input type="text" name="usuario" class="input-field" value="root" required />
				<label class="input-label">Usuário</label>
			</div>
			<div class="input">
				<input type="text" name="senha" class="input-field" value="" required />
				<label class="input-label">Senha</label>
			</div>
			<div class="input">
				<input type="text" name="host"class="input-field" required />
				<label class="input-label">Host</label>
			</div>
            <div class="input">
				<input type="text" name="porta" class="input-field" required />
				<label class="input-label">Porta</label>
			</div>	
            <h2>Database</h2>
            <div class="input">
				<input type="text" name="nomeBanco"class="input-field" required />
				<label class="input-label">Nome DataBase</label>
			</div>	

            <h2>Tabela</h2>
            <div class="input">
				<input type="text" name="tabela" class="input-field" required />
				<label class="input-label">Nome Tabela</label>
			</div>
           
            <h2>Campo das Tabelas</h2>
            <div class="input">
				<input type="text" name="nomeCampo" class="input-field" required />
				<label class="input-label">Nome do campo</label>
			</div>
            <select id="CampType" name="tipos">
                <option value="int">int</option>
                <option value="varchar">varchar(45)</option>
                <option value="double">double</option>
            </select>
            <div class="input-texto">
                <div class="checkbox">
                    <input  type="checkbox" name="op1" id="Primary key" value="Primary Key"> 
                    <label class="input-label">Primary Key</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op2" id="NotNull" value="NotNull"> 
                    <label class="input-label">Não nulo</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op3" id="Unique" value="Unique"> 
                    <label class="input-label">Único</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op4" id="Binari" value="Binari"> 
                    <label class="input-label">Binário</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op5" id="NotAssing" value="NotAssing"> 
                    <label class="input-label">Não assinado</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op6" id="Cero" value="Cero"> 
                    <label class="input-label">Valor 0 se for númerico</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op7" id="AutoIncrement" value="AutoIncrement"> 
                    <label class="input-label">Incremento automático</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="op8" id="ColGerada" value="ColGerada">         
                    <label class="input-label">Coluna gerada</label>
                </div>
			</div>            
                <div class="action">
            <button class="action-button">Salvar</button>
        </div>
    </form>
		
	</div>
</div>

<style>

</style>