<?php 
/**
 * 	Template Name: Calculadora
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header();  ?>

<div class="mdin-calculadora">



    <div class="row_ justify-content-center_">
        <div class="mdin-calculadora--header">

            <div class="container" id="corpo">
                    <span class="mdin-calculadora--beta">Versão Beta</span>
                    <h1 class="mdin-calculadora--title text-center">Calculadora do custo diário de um tratamento com CBD</h1>
                    <p class="mdin-calculadora--lead text-center">
                        Use os valores da sua receita médica para calcular o custo do seu tratamento. Caso você ainda não tenha uma receita médica, consulta um médico experiente em Cannabis medicinal.
                    </p>
                    

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                        <div class="mdin-calculadora--box">
                        
                            <div class="row">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="">Dosagem em</label>
                                        <select class="mdin-calculadora--select form-control" name="" id="TipoDosagem">
                                            
                                            <option value="mg">Miligramas</option selected>
                                            <!-- <option value="gt">Gotas</option> -->
                                            
                                        </select>
                                    </div>
                                        
                                </div>
                    
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dose diária da sua receita</label>
                                        <input type="text" id="PrecoMgVerdemed" value="0.18" style="display:none">
                                        <input type="text" id="PrecoMgAbr" value="0.45" style="display:none">
                                        <input type="text" id="PrecoMgPratt" value="0.46" style="display:none">

                                        <div id="eDosagemDiariaMg">
                                            <div class="input-group mb-3">
                                                <input type="text" placeholder="Dose" id="DosagemDiariaMg" value="50" class="mdin-calculadora--select form-control">
                                                <span class="input-group-text" id="basic-addon2">MG/dia</span>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                      
                                    </div>
                                    
                                </div>

                               
                                <div class="col-md-4">
                                    <button id="botao" class="mdin-calculadora--button btn btn-primary">Calcular custo diário</button>
                                </div>
                            </div>
                   
                    </div>
                        </div>
                    </div>
                    

                    <p class="mdin-calculadora-box--span text-center">
                    Caso você não saiba o que inserir, uma dose consenso para muitas patologias é de 50 miligramas por dia. Consulte sempre um médico experiente no tratamento com Cannabis medicinal.
                    </p>



                   

            </div>


            
                    

        </div>


        <div class="container" id="ResultPage" style="display:none;">

                <div class="row justify-content-center">

                
                    <div class="col-md-8">
                            <div id="resultado" class="mdin-calculadora--resultado text-center">
                                <tbody id="corpo"></tbody>
                                <p id="msg" class="mdin-calculadora--msg"></p>
                                <h2 id="valor" class="mdin-calculadora--valor"></h2>
                                <p id="mensal" class="mdin-calculadora--mensal"></p>
                                <div id="frasco" class="mdin-calculadora--frasco"></div>

                                
                            </div>
                    </div>


                </div>     
                
                
                <div class="row justify-content-center">
                    <div class="col-md-8">


                                    <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Agora quer calcular o custo com os produtos da Abrace e da Pratti Donaduzi? Clique aqui
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <div class="row mdin-box-result-red">
                                            <div class="col-md-10">
                                                <div class="mdin-box-result-red--title">Abrace</div>
                                                <p class="mdin-box-result-red--text">
                                                    *Custo/mg considera um pedido mínimo de 5 frascos do produto Abrace Óleo Laranja Full Spectrum 60ml, frete médio de R$ 70,00 e a taxa anual de R$ 350,00
                                                </p>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="mdin-box-result-red--price" id="abr"></div>
                                                <span class="mdin-box-result-red--customg">Custo por dia</span>
                                            </div>
                                        
                                        </div>

                                        <div class="row mdin-box-result-red">
                                            <div class="col-md-10">
                                                <div class="mdin-box-result-red--title">Prati Donaduzzi</div>
                                                <p class="mdin-box-result-red--text">
                                                    *Custo/mg considera um pedido mínimo de 5 frascos do produto Prati Donaduzzi Cannabidiol 30ml
                                                </p>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="mdin-box-result-red--price" id="pratt"></div>
                                                <span class="mdin-box-result-red--customg">Custo por dia</span>
                                            </div>
                                        
                                        </div>
                                </div>
                                </div>
                            </div>
                    
                    </div>




                        
                    </div>
                </div>


                <div class="mdin-spacing"></div>
                <div class="mdin-spacing"></div>
                <div class="mdin-spacing"></div>
                <div class="mdin-spacing"></div>
                    
        </div>
    </div>

</div>




<?php get_footer(); // This fxn gets the footer.php file and renders it ?>