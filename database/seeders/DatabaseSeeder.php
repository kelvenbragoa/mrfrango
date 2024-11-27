<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\CompanyConfig::factory()->create(
        //     [
        //         'id'=>1,
        //         'name'=>'INOVATIS MZ LTD',
        //         'image'=>'/files/img/sys/image.png'
        //     ],
        // );


        // DB::table('units')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Unidades',
        //         'alias'=>'UN',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Kilogramas',
        //         'alias'=>'KG',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Litros',
        //         'alias'=>'L',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Gramas',
        //         'alias'=>'G',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
           
        // ]);

        
        // DB::table('request_tool_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Aguardando Aprovação',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Aprovado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Rejeitado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Entregue',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Programado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
           
        // ]);
        // DB::table('request_stock_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Aguardando Aprovação',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Aprovado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Rejeitado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Entregue',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Programado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
           
        // ]);

        // DB::table('request_technician_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Aguardando Aprovação',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Aprovado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Rejeitado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Entregue',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Programado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
           
        // ]);


        // DB::table('tax_ivas')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'IVA Normal (16%)',
        //         'tax'=>'16.0',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
           
        // ]);


        // DB::table('stock_centers')->insert([
        //     [
        //         'id'=>1,
        //         'code'=>'01',
        //         'name'=>'Stock Principal',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
           
        // ]);

        // DB::table('center_costs')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Classe 1 - Meios Financeiros',
        //         'code'=>'Classe 1',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Classe 2 - Inventários e activos biológicos',
        //         'code'=>'Classe 2',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Classe 3 - Investimento de capital',
        //         'code'=>'Classe 3',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Classe 4 - Contas a receber, contas a pagar, acréscimos e diferimentos',
        //         'code'=>'Classe 4',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Classe 5 - Capital próprio',
        //         'code'=>'Classe 5',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>6,
        //         'name'=>'Classe 6 - Gastos e perdas',
        //         'code'=>'Classe 6',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>7,
        //         'name'=>'Classe 7 - Rendimentos e ganhos',
        //         'code'=>'Classe 7',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>8,
        //         'name'=>'Classe 8 - Resultados',
        //         'code'=>'Classe 8',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
           
        // ]);

        // DB::table('center_cost_accounts')->insert([
        //     ["id"=>"1","center_cost_id"=>"1","name"=>"1.1 CAIXA","code"=>"1.1","created_at"=>"2023-09-06 11:06:03","updated_at"=>"2023-09-06 11:06:03"],
        //     ["id"=>"2","center_cost_id"=>"1","name"=>"1.2 BANCOS","code"=>"1.2","created_at"=>"2023-09-06 11:06:27","updated_at"=>"2023-09-06 11:06:27"],
        //     ["id"=>"3","center_cost_id"=>"1","name"=>"1.2.1 Deposito a ordem","code"=>"1.2.1","created_at"=>"2023-09-06 11:07:15","updated_at"=>"2023-09-06 11:07:15"],
        //     ["id"=>"4","center_cost_id"=>"1","name"=>"1.2.2 Deposito com pre-aviso","code"=>"1.2.2","created_at"=>"2023-09-06 11:07:32","updated_at"=>"2023-09-06 11:07:32"],
        //     ["id"=>"5","center_cost_id"=>"1","name"=>"1.2.3 Deposito a prazo","code"=>"1.2.3","created_at"=>"2023-09-06 11:08:18","updated_at"=>"2023-09-06 11:08:18"],
        //     ["id"=>"6","center_cost_id"=>"2","name"=>"2.1 COMPRAS","code"=>"2.1","created_at"=>"2023-09-06 11:08:59","updated_at"=>"2023-09-06 11:08:59"],
        //     ["id"=>"7","center_cost_id"=>"2","name"=>"2.1.1 Mercadorias","code"=>"2.1.1","created_at"=>"2023-09-06 11:09:27","updated_at"=>"2023-09-06 11:09:27"],
        //     ["id"=>"8","center_cost_id"=>"2","name"=>"2.1.2  Matéria prima, auxiliares e materiais","code"=>"2.1.2","created_at"=>"2023-09-06 11:10:50","updated_at"=>"2023-09-06 11:10:50"],
        //     ["id"=>"9","center_cost_id"=>"2","name"=>"2.1.2.1 Matéria primas","code"=>"2.1.2.1","created_at"=>"2023-09-06 11:11:30","updated_at"=>"2023-09-06 11:11:30"],
        //     ["id"=>"10","center_cost_id"=>"2","name"=>"2.1.2.2 Matéria auxiliares","code"=>"2.1.2.2","created_at"=>"2023-09-06 11:12:26","updated_at"=>"2023-09-06 11:12:26"],
        //     ["id"=>"11","center_cost_id"=>"2","name"=>"2.1.2.3 Materiais","code"=>"2.1.2.3","created_at"=>"2023-09-06 11:12:53","updated_at"=>"2023-09-06 11:12:53"],
        //     ["id"=>"12","center_cost_id"=>"2","name"=>"2.1.2.3.1 Combustiveis e lubrificantes","code"=>"2.1.2.3.1","created_at"=>"2023-09-06 11:13:19","updated_at"=>"2023-09-06 11:13:19"],
        //     ["id"=>"13","center_cost_id"=>"2","name"=>"2.1.2.3.2 Embalagens comerciais","code"=>"2.1.2.3.2","created_at"=>"2023-09-06 11:13:43","updated_at"=>"2023-09-06 11:13:43"],
        //     ["id"=>"14","center_cost_id"=>"2","name"=>"2.1.2.3.3 Peças e sobressalentes","code"=>"2.1.2.3.3","created_at"=>"2023-09-06 11:15:00","updated_at"=>"2023-09-06 11:15:00"],
        //     ["id"=>"15","center_cost_id"=>"2","name"=>"2.1.2.3.9 Materiais diversos","code"=>"2.1.2.3.9","created_at"=>"2023-09-06 11:15:35","updated_at"=>"2023-09-06 11:15:35"],
        //     ["id"=>"16","center_cost_id"=>"2","name"=>"2.1.7 Devoluções  de compras","code"=>"2.1.7","created_at"=>"2023-09-06 11:16:43","updated_at"=>"2023-09-06 11:16:43"],
        //     ["id"=>"17","center_cost_id"=>"2","name"=>"2.1.8 Descontos e abatimentos em comptras","code"=>"2.1.8","created_at"=>"2023-09-06 11:17:23","updated_at"=>"2023-09-06 11:17:23"],
        //     ["id"=>"18","center_cost_id"=>"2","name"=>"2.2 MERCADORIA","code"=>"2.2","created_at"=>"2023-09-06 11:17:47","updated_at"=>"2023-09-06 11:17:47"],
        //     ["id"=>"19","center_cost_id"=>"2","name"=>"2.2.1 Mercadoria em trânsito","code"=>"2.2.1","created_at"=>"2023-09-06 11:19:02","updated_at"=>"2023-09-06 11:19:02"],
        //     ["id"=>"20","center_cost_id"=>"2","name"=>"2.2.2 Mercadorias em poder de terceiros","code"=>"2.2.2","created_at"=>"2023-09-06 11:19:38","updated_at"=>"2023-09-06 11:19:38"],
        //     ["id"=>"21","center_cost_id"=>"2","name"=>"2.3 PRODUTOS ACABADOS E INTERMÉDIOS","code"=>"2.3","created_at"=>"2023-09-06 11:20:41","updated_at"=>"2023-09-06 11:20:41"],
        //     ["id"=>"22","center_cost_id"=>"2","name"=>"2.3.1 Produtos acabados em poder de terceiros","code"=>"2.3.1","created_at"=>"2023-09-06 11:21:34","updated_at"=>"2023-09-06 11:21:34"],
        //     ["id"=>"23","center_cost_id"=>"2","name"=>"2.4 SUBPRODUTOS, DESPERDICIOS, RESIDUOS E REFUGOS","code"=>"2.4","created_at"=>"2023-09-06 11:22:48","updated_at"=>"2023-09-06 11:22:48"],
        //     ["id"=>"24","center_cost_id"=>"2","name"=>"2.4.1 Subprodutos","code"=>"2.4.1","created_at"=>"2023-09-06 11:23:15","updated_at"=>"2023-09-06 11:23:15"],
        //     ["id"=>"25","center_cost_id"=>"2","name"=>"2.4.2 Desperdicios, residuos e refugos","code"=>"2.4.2","created_at"=>"2023-09-06 11:24:01","updated_at"=>"2023-09-06 11:25:52"],
        //     ["id"=>"26","center_cost_id"=>"2","name"=>"2.5 PRODUTOS OU SERVIÇOS EM CURSO","code"=>"2.5","created_at"=>"2023-09-06 11:27:20","updated_at"=>"2023-09-06 11:27:20"],
        //     ["id"=>"27","center_cost_id"=>"2","name"=>"2.6 MATÉRIAS PRIMAS, AUXILIARES E MATERIAIS","code"=>"2.6","created_at"=>"2023-09-06 11:28:37","updated_at"=>"2023-09-06 11:28:37"],
        //     ["id"=>"28","center_cost_id"=>"3","name"=>"Investimentos","code"=>"0001","created_at"=>"2023-09-06 11:30:01","updated_at"=>"2023-09-06 11:30:01"],
        //     ["id"=>"29","center_cost_id"=>"2","name"=>"2.6.1 Matérias primas","code"=>"2.6.1","created_at"=>"2023-09-06 11:30:10","updated_at"=>"2023-09-06 11:30:10"],
        //     ["id"=>"30","center_cost_id"=>"2","name"=>"2.6.2 Matérias auxiliares","code"=>"2.6.2","created_at"=>"2023-09-06 11:30:47","updated_at"=>"2023-09-06 11:30:47"],
        //     ["id"=>"31","center_cost_id"=>"2","name"=>"2.6.4 Materiais","code"=>"2.6.4","created_at"=>"2023-09-06 11:31:14","updated_at"=>"2023-09-06 11:31:14"],
        //     ["id"=>"32","center_cost_id"=>"2","name"=>"2.6.3.1 Combustiveis e lubrificantes","code"=>"2.6.3.1","created_at"=>"2023-09-06 11:31:48","updated_at"=>"2023-09-06 11:31:48"],
        //     ["id"=>"33","center_cost_id"=>"2","name"=>"2.6.3.2 Embalagens  comerciais","code"=>"2.6.3.2","created_at"=>"2023-09-06 11:32:26","updated_at"=>"2023-09-06 11:32:26"],
        //     ["id"=>"34","center_cost_id"=>"2","name"=>"2.6.3.3 Peças e sobressalentes","code"=>"2.6.3.3","created_at"=>"2023-09-06 12:27:30","updated_at"=>"2023-09-06 12:27:30"],
        //     ["id"=>"35","center_cost_id"=>"2","name"=>"2.6.3.9 Materiiais diversos","code"=>"2.6.3.9","created_at"=>"2023-09-06 12:28:16","updated_at"=>"2023-09-06 12:28:16"],
        //     ["id"=>"36","center_cost_id"=>"2","name"=>"2.6.4 Matérias primas, auxiliares e materiais em transito","code"=>"2.6.4","created_at"=>"2023-09-06 12:29:48","updated_at"=>"2023-09-06 12:29:48"],
        //     ["id"=>"37","center_cost_id"=>"2","name"=>"2.7 ACTIVOS BIOLOGICOS","code"=>"2.7","created_at"=>"2023-09-06 12:30:22","updated_at"=>"2023-09-06 12:30:22"],
        //     ["id"=>"38","center_cost_id"=>"2","name"=>"2.7.1  De produção","code"=>"2.7.1","created_at"=>"2023-09-06 12:31:02","updated_at"=>"2023-09-06 12:31:02"],
        //     ["id"=>"39","center_cost_id"=>"2","name"=>"2.7.1.1 Animais","code"=>"2.7.1.1","created_at"=>"2023-09-06 12:31:23","updated_at"=>"2023-09-06 12:31:23"],
        //     ["id"=>"40","center_cost_id"=>"2","name"=>"2.7.1.2 Plantas","code"=>"2.7.1.2","created_at"=>"2023-09-06 12:31:42","updated_at"=>"2023-09-06 12:31:42"],
        //     ["id"=>"41","center_cost_id"=>"2","name"=>"2.7.2 Consumiveis","code"=>"2.7.2","created_at"=>"2023-09-06 12:32:14","updated_at"=>"2023-09-06 12:32:14"],
        //     ["id"=>"42","center_cost_id"=>"2","name"=>"2.7.2.1 Animais","code"=>"2.7.2.1","created_at"=>"2023-09-06 12:32:34","updated_at"=>"2023-09-06 12:32:34"],
        //     ["id"=>"43","center_cost_id"=>"2","name"=>"2.7.1.2 Plantas","code"=>"2.7.1.2","created_at"=>"2023-09-06 12:32:53","updated_at"=>"2023-09-06 12:32:53"],
        //     ["id"=>"44","center_cost_id"=>"2","name"=>"2.8 REGULARIZAÇÃO DE INVENTÁRIOS","code"=>"2.8","created_at"=>"2023-09-06 12:34:52","updated_at"=>"2023-09-06 12:34:52"],
        //     ["id"=>"45","center_cost_id"=>"2","name"=>"2.8.2 Mercadorias","code"=>"2.8.2","created_at"=>"2023-09-06 12:35:20","updated_at"=>"2023-09-06 12:35:20"],
        //     ["id"=>"46","center_cost_id"=>"2","name"=>"2.8.3 Produtos acabados e Intermédios","code"=>"2.8.3","created_at"=>"2023-09-06 12:36:09","updated_at"=>"2023-09-06 12:36:09"],
        //     ["id"=>"47","center_cost_id"=>"2","name"=>"2.8.4 Subprodutos, desperdicios, residuos e refugos","code"=>"2.8.4","created_at"=>"2023-09-06 12:37:02","updated_at"=>"2023-09-06 12:37:02"],
        //     ["id"=>"48","center_cost_id"=>"2","name"=>"2.8.5 Produtos ou Serviços em cursos","code"=>"2.8.5","created_at"=>"2023-09-06 12:37:53","updated_at"=>"2023-09-06 12:37:53"],
        //     ["id"=>"49","center_cost_id"=>"2","name"=>"2.8.6 Matérias primas, auxiliares e materiais","code"=>"2.8.6","created_at"=>"2023-09-06 12:38:56","updated_at"=>"2023-09-06 12:38:56"],
        //     ["id"=>"50","center_cost_id"=>"2","name"=>"2.8.7 Activos biológicos","code"=>"2.8.7","created_at"=>"2023-09-06 12:39:49","updated_at"=>"2023-09-06 12:39:49"],
        //     ["id"=>"51","center_cost_id"=>"2","name"=>"2.9 AJUSTAMENTOS PARA O VALOR REALIZAVEL LIQUIDO","code"=>"2.9","created_at"=>"2023-09-06 12:40:29","updated_at"=>"2023-09-06 12:40:29"],
        //     ["id"=>"52","center_cost_id"=>"2","name"=>"2.9.2 Mercadorias","code"=>"2.9.2","created_at"=>"2023-09-06 12:40:51","updated_at"=>"2023-09-06 12:40:51"],
        //     ["id"=>"53","center_cost_id"=>"2","name"=>"2.9.3 Produtos acabados e intermedios","code"=>"2.9.3","created_at"=>"2023-09-06 12:41:34","updated_at"=>"2023-09-06 12:41:34"],
        //     ["id"=>"54","center_cost_id"=>"2","name"=>"2.9.4 Subprodutos, desperdicios, residuos e refugos","code"=>"2.9.4","created_at"=>"2023-09-06 12:42:23","updated_at"=>"2023-09-06 12:42:23"],
        //     ["id"=>"55","center_cost_id"=>"2","name"=>"2.9.5 Produtos ou  Serviços em cursos","code"=>"2.9.5","created_at"=>"2023-09-06 12:43:21","updated_at"=>"2023-09-06 12:43:21"],
        //     ["id"=>"56","center_cost_id"=>"2","name"=>"2.9.6 Matérias primas, auxiliares e materiais","code"=>"2.9.6","created_at"=>"2023-09-06 12:44:27","updated_at"=>"2023-09-06 12:44:27"],
        //     ["id"=>"57","center_cost_id"=>"2","name"=>"2.9.7 Activos Biológicos","code"=>"2.9.7","created_at"=>"2023-09-06 12:45:16","updated_at"=>"2023-09-06 12:45:59"],
        //     ["id"=>"58","center_cost_id"=>"3","name"=>"3.1 INVESTIMENTOS FINANCEIROS","code"=>"3.1","created_at"=>"2023-09-06 12:47:15","updated_at"=>"2023-09-06 12:47:15"],
        //     ["id"=>"59","center_cost_id"=>"3","name"=>"3.1.1 Investimentos em Subsidiárias","code"=>"3.1.1","created_at"=>"2023-09-06 12:48:49","updated_at"=>"2023-09-06 12:48:49"],
        //     ["id"=>"60","center_cost_id"=>"3","name"=>"3.1.2 Investimentos associadas","code"=>"3.1.2","created_at"=>"2023-09-06 12:49:18","updated_at"=>"2023-09-06 12:49:18"],
        //     ["id"=>"61","center_cost_id"=>"3","name"=>"3.1.3 Outros investimentis financeiros","code"=>"3.1.3","created_at"=>"2023-09-06 12:49:46","updated_at"=>"2023-09-06 12:49:46"],
        //     ["id"=>"62","center_cost_id"=>"3","name"=>"3.2 ACTIVOS TANGIVEIS","code"=>"3.2","created_at"=>"2023-09-06 12:50:12","updated_at"=>"2023-09-06 12:50:12"],
        //     ["id"=>"63","center_cost_id"=>"3","name"=>"3.2.1  Construções","code"=>"3.2.1","created_at"=>"2023-09-06 12:50:59","updated_at"=>"2023-09-06 12:50:59"],
        //     ["id"=>"64","center_cost_id"=>"3","name"=>"3.2.1.1 Edificios industriais","code"=>"3.2.1.1","created_at"=>"2023-09-06 12:51:34","updated_at"=>"2023-09-06 12:51:34"],
        //     ["id"=>"65","center_cost_id"=>"3","name"=>"3.2.1.2 Edificios administrativos e comerciais","code"=>"3.2.1.2","created_at"=>"2023-09-06 12:52:15","updated_at"=>"2023-09-06 12:52:15"],
        //     ["id"=>"66","center_cost_id"=>"3","name"=>"3.2.1.3 Edifícios para habitação e outros fins sociais","code"=>"3.2.1.3","created_at"=>"2023-09-06 12:53:35","updated_at"=>"2023-09-06 12:53:35"],
        //     ["id"=>"67","center_cost_id"=>"3","name"=>"3.2.1.6 Vias de comunicação e construção afins","code"=>"3.2.1.6","created_at"=>"2023-09-06 12:54:30","updated_at"=>"2023-09-06 12:54:30"],
        //     ["id"=>"68","center_cost_id"=>"3","name"=>"3.2.2 Equipamento basico","code"=>"3.2.2","created_at"=>"2023-09-06 12:55:10","updated_at"=>"2023-09-06 12:55:10"],
        //     ["id"=>"69","center_cost_id"=>"3","name"=>"3.2.3 Mobiliários e equipamentos administrativos social","code"=>"3.2.3","created_at"=>"2023-09-06 12:56:28","updated_at"=>"2023-09-06 12:56:28"],
        //     ["id"=>"70","center_cost_id"=>"3","name"=>"3.2.4 Equipamento de transporte","code"=>"3.2.4","created_at"=>"2023-09-06 12:56:56","updated_at"=>"2023-09-06 12:56:56"],
        //     ["id"=>"71","center_cost_id"=>"3","name"=>"3.2.5 Teras e vasilhame","code"=>"3.2.5","created_at"=>"2023-09-06 12:57:35","updated_at"=>"2023-09-06 12:57:35"],
        //     ["id"=>"72","center_cost_id"=>"3","name"=>"3.2.6 Ferramentas e utensilios","code"=>"3.2.6","created_at"=>"2023-09-06 12:58:04","updated_at"=>"2023-09-06 12:58:04"],
        //     ["id"=>"73","center_cost_id"=>"3","name"=>"3.2.9 Outros activos tangiveis","code"=>"3.2.9","created_at"=>"2023-09-06 12:58:31","updated_at"=>"2023-09-06 12:58:31"],
        //     ["id"=>"74","center_cost_id"=>"3","name"=>"3.3 ACTIVOS INTANGIVEIS","code"=>"3.3","created_at"=>"2023-09-06 12:59:02","updated_at"=>"2023-09-06 12:59:02"],
        //     ["id"=>"75","center_cost_id"=>"3","name"=>"3.3.1 Despesas de desenvolvimento","code"=>"3.3.1","created_at"=>"2023-09-06 12:59:34","updated_at"=>"2023-09-06 12:59:34"],
        //     ["id"=>"76","center_cost_id"=>"3","name"=>"3.3.2 Propriedades industriais e outros direitos","code"=>"3.3.2","created_at"=>"2023-09-06 13:00:16","updated_at"=>"2023-09-06 13:00:16"],
        //     ["id"=>"77","center_cost_id"=>"3","name"=>"3.3.3 Trespasse","code"=>"3.3.3","created_at"=>"2023-09-06 13:00:41","updated_at"=>"2023-09-06 13:00:41"],
        //     ["id"=>"78","center_cost_id"=>"3","name"=>"3.3.4 Encargos de Constituição ou de expensão","code"=>"3.3.4","created_at"=>"2023-09-06 13:01:26","updated_at"=>"2023-09-06 13:01:26"],
        //     ["id"=>"79","center_cost_id"=>"3","name"=>"3.4 INVESTIMENTO EM CURSO","code"=>"3.4","created_at"=>"2023-09-06 13:01:52","updated_at"=>"2023-09-06 13:01:52"],
        //     ["id"=>"80","center_cost_id"=>"3","name"=>"3.4.2 Activos tangiveis","code"=>"3.4.2","created_at"=>"2023-09-06 13:02:25","updated_at"=>"2023-09-06 13:02:25"],
        //     ["id"=>"81","center_cost_id"=>"3","name"=>"3.4.3 Activos intangiveis","code"=>"3.4.3","created_at"=>"2023-09-06 13:02:51","updated_at"=>"2023-09-06 13:02:51"],
        //     ["id"=>"82","center_cost_id"=>"3","name"=>"3.6 ACTIVOS TANGIVEIS DE INVESTIMENTOS","code"=>"3.6","created_at"=>"2023-09-06 13:03:25","updated_at"=>"2023-09-06 13:03:25"],
        //     ["id"=>"83","center_cost_id"=>"3","name"=>"3.8  AMORTIZAÇÕES E ACUMULADOS","code"=>"3.8","created_at"=>"2023-09-06 13:04:44","updated_at"=>"2023-09-06 13:04:44"],
        //     ["id"=>"84","center_cost_id"=>"3","name"=>"3.8.2 Activos tangiveis","code"=>"3.8.2","created_at"=>"2023-09-06 13:05:05","updated_at"=>"2023-09-06 13:05:05"],
        //     ["id"=>"85","center_cost_id"=>"3","name"=>"3.8.3 Activos intangiveis","code"=>"3.8.3","created_at"=>"2023-09-06 13:05:27","updated_at"=>"2023-09-06 13:05:27"],
        //     ["id"=>"86","center_cost_id"=>"3","name"=>"3.8.6 Activos tangiveis de investimentos","code"=>"3.8.6","created_at"=>"2023-09-06 13:06:19","updated_at"=>"2023-09-06 13:06:19"],
        //     ["id"=>"87","center_cost_id"=>"3","name"=>"3.9 AJUSTAMENTO DE INVESTIMENTOS FINANCEIROS","code"=>"3.9","created_at"=>"2023-09-06 13:06:51","updated_at"=>"2023-09-06 13:06:51"],
        //     ["id"=>"88","center_cost_id"=>"3","name"=>"3.9.1 Investimentos financeiros","code"=>"3.9.1","created_at"=>"2023-09-06 13:07:24","updated_at"=>"2023-09-06 13:07:24"],
        //     ["id"=>"89","center_cost_id"=>"4","name"=>"4.1 CLIENTS","code"=>"4.1","created_at"=>"2023-09-06 13:28:04","updated_at"=>"2023-09-06 13:28:04"],
        //     ["id"=>"90","center_cost_id"=>"4","name"=>"4.1.1 Cliente c\/c","code"=>"4.1.1","created_at"=>"2023-09-06 13:28:39","updated_at"=>"2023-09-06 13:28:39"],
        //     ["id"=>"91","center_cost_id"=>"4","name"=>"4.1.2 Cliente - titulos a receber","code"=>"4.1.2","created_at"=>"2023-09-06 13:29:19","updated_at"=>"2023-09-06 13:29:19"],
        //     ["id"=>"92","center_cost_id"=>"4","name"=>"4.1.8 Cliente de Cobrança duvidosa","code"=>"4.1.8","created_at"=>"2023-09-06 13:30:46","updated_at"=>"2023-09-06 13:30:46"],
        //     ["id"=>"93","center_cost_id"=>"4","name"=>"4.1.9 Adiantamento de cliente","code"=>"4.1.9","created_at"=>"2023-09-06 13:31:16","updated_at"=>"2023-09-06 13:31:16"],
        //     ["id"=>"94","center_cost_id"=>"4","name"=>"4.2 FORNECEDORES","code"=>"4.2","created_at"=>"2023-09-06 13:31:34","updated_at"=>"2023-09-06 13:31:34"],
        //     ["id"=>"95","center_cost_id"=>"4","name"=>"4.2.1 Fornecedores c\/c","code"=>"4.2.1","created_at"=>"2023-09-06 13:32:07","updated_at"=>"2023-09-06 13:32:07"],
        //     ["id"=>"96","center_cost_id"=>"4","name"=>"4.2.2 Fornecedores - titulos a pagar","code"=>"4.2.2","created_at"=>"2023-09-06 13:32:40","updated_at"=>"2023-09-06 13:32:40"],
        //     ["id"=>"97","center_cost_id"=>"4","name"=>"4.2.9 Adiantamentos a fornecedores","code"=>"4.2.9","created_at"=>"2023-09-06 13:33:08","updated_at"=>"2023-09-06 13:33:08"],
        //     ["id"=>"98","center_cost_id"=>"4","name"=>"4.3 EMPRÉSTIMO OBTIDOS","code"=>"4.3","created_at"=>"2023-09-06 13:33:57","updated_at"=>"2023-09-06 13:33:57"],
        //     ["id"=>"99","center_cost_id"=>"4","name"=>"4.3.1 Empréstimos bancários","code"=>"4.3.1","created_at"=>"2023-09-06 13:34:44","updated_at"=>"2023-09-06 13:34:44"],
        //     ["id"=>"100","center_cost_id"=>"4","name"=>"4.3.1.1 de curto prazo","code"=>"4.3.1.1","created_at"=>"2023-09-06 13:35:19","updated_at"=>"2023-09-06 13:35:19"],
        //     ["id"=>"101","center_cost_id"=>"4","name"=>"4.3.1.2 De médio e longo prazo","code"=>"4.3.1.2","created_at"=>"2023-09-06 13:36:26","updated_at"=>"2023-09-06 13:36:26"],
        //     ["id"=>"102","center_cost_id"=>"4","name"=>"4.4 ESTADO","code"=>"4.4","created_at"=>"2023-09-06 13:36:38","updated_at"=>"2023-09-06 13:36:38"],
        //     ["id"=>"103","center_cost_id"=>"4","name"=>"4.4.1 Imposto sobre rendimento","code"=>"4.4.1","created_at"=>"2023-09-06 13:37:08","updated_at"=>"2023-09-06 13:37:08"],
        //     ["id"=>"104","center_cost_id"=>"4","name"=>"4.4.1.1 Estimatva de imposto","code"=>"4.4.1.1","created_at"=>"2023-09-06 13:37:47","updated_at"=>"2023-09-06 13:37:47"],
        //     ["id"=>"105","center_cost_id"=>"4","name"=>"4.4.1.2 Pagamento por conta","code"=>"4.4.1.2","created_at"=>"2023-09-06 13:55:08","updated_at"=>"2023-09-06 13:55:08"],
        //     ["id"=>"106","center_cost_id"=>"4","name"=>"4.4.1.3 Pagamento especial por conta","code"=>"4.4.1.3","created_at"=>"2023-09-06 13:55:43","updated_at"=>"2023-09-06 13:55:43"],
        //     ["id"=>"107","center_cost_id"=>"4","name"=>"4.4.2 Imposto retidos na fonte","code"=>"4.4.2","created_at"=>"2023-09-06 13:56:35","updated_at"=>"2023-09-06 13:56:35"],
        //     ["id"=>"108","center_cost_id"=>"4","name"=>"4.4.2.1 Rendimento de trabalho dependente","code"=>"4.4.2.1","created_at"=>"2023-09-06 13:57:53","updated_at"=>"2023-09-06 13:57:53"],
        //     ["id"=>"109","center_cost_id"=>"4","name"=>"4.4.2.2 Rendimento profissionais","code"=>"4.4.2.2","created_at"=>"2023-09-06 13:58:20","updated_at"=>"2023-09-06 13:58:20"],
        //     ["id"=>"110","center_cost_id"=>"4","name"=>"4.4.2.3 Rendimento de capitais","code"=>"4.4.2.3","created_at"=>"2023-09-06 13:58:49","updated_at"=>"2023-09-06 13:58:49"],
        //     ["id"=>"111","center_cost_id"=>"4","name"=>"4.4.2.4 Rendimento prediais","code"=>"4.4.2.4","created_at"=>"2023-09-06 13:59:53","updated_at"=>"2023-09-06 13:59:53"],
        //     ["id"=>"112","center_cost_id"=>"4","name"=>"4.4.2.5 Outros rendimentos","code"=>"4.4.2.5","created_at"=>"2023-09-06 14:00:23","updated_at"=>"2023-09-06 14:00:23"],
        //     ["id"=>"113","center_cost_id"=>"4","name"=>"4.4.3 Imposto sobre o valor acrescentado","code"=>"4.4.3","created_at"=>"2023-09-06 14:01:32","updated_at"=>"2023-09-06 14:01:32"],
        //     ["id"=>"114","center_cost_id"=>"4","name"=>"4.4.3.1 IVA suportado","code"=>"4.4.3.1","created_at"=>"2023-09-06 14:01:58","updated_at"=>"2023-09-06 14:01:58"],
        //     ["id"=>"115","center_cost_id"=>"4","name"=>"4.4.3.1.1 Inventários","code"=>"4.4.3.1.1","created_at"=>"2023-09-06 14:02:36","updated_at"=>"2023-09-06 14:02:36"],
        //     ["id"=>"116","center_cost_id"=>"4","name"=>"4.4.3.1.2 Activos tangiveis e intagiveis","code"=>"4.4.3.1.2","created_at"=>"2023-09-06 14:03:25","updated_at"=>"2023-09-06 14:03:25"],
        //     ["id"=>"117","center_cost_id"=>"4","name"=>"4.4.3.1.3 Outros bens e Serviço","code"=>"4.4.3.1.3","created_at"=>"2023-09-06 14:04:27","updated_at"=>"2023-09-06 14:04:27"],
        //     ["id"=>"118","center_cost_id"=>"4","name"=>"4.4.3.2 Inventarios","code"=>"4.4.3.2","created_at"=>"2023-09-06 14:04:54","updated_at"=>"2023-09-06 14:04:54"],
        //     ["id"=>"119","center_cost_id"=>"4","name"=>"4.4.3.2 IVA dedutivel","code"=>"4.4.3.2","created_at"=>"2023-09-06 14:05:30","updated_at"=>"2023-09-06 14:06:17"],
        //     ["id"=>"120","center_cost_id"=>"4","name"=>"4.4.3.2.1 Inventarios","code"=>"4.4.3.2.1","created_at"=>"2023-09-06 14:07:00","updated_at"=>"2023-09-06 14:07:00"],
        //     ["id"=>"121","center_cost_id"=>"4","name"=>"4.4.3.2.2 Activos tangiveis e intagiveis","code"=>"4.4.3.2.2","created_at"=>"2023-09-06 14:07:42","updated_at"=>"2023-09-06 14:07:42"],
        //     ["id"=>"122","center_cost_id"=>"4","name"=>"4.4.3.2.3 Outros bens e servicos","code"=>"4.4.3.2.3","created_at"=>"2023-09-06 14:08:24","updated_at"=>"2023-09-06 14:08:24"],
        //     ["id"=>"123","center_cost_id"=>"4","name"=>"4.4.3.3 IVA Liquidado","code"=>"4.4.3.3","created_at"=>"2023-09-06 14:08:52","updated_at"=>"2023-09-06 14:08:52"],
        //     ["id"=>"124","center_cost_id"=>"4","name"=>"4.4.3.3.1 Operações gerais","code"=>"4.4.3.3.1","created_at"=>"2023-09-06 14:09:33","updated_at"=>"2023-09-06 14:09:33"],
        //     ["id"=>"125","center_cost_id"=>"4","name"=>"4.4.3.3.2 Autoconsumo e operações gratuitas","code"=>"4.4.3.3.2","created_at"=>"2023-09-06 14:10:04","updated_at"=>"2023-09-06 14:11:18"],
        //     ["id"=>"126","center_cost_id"=>"4","name"=>"4.4.3.3.3 Operações especiais","code"=>"4.4.3.3.3","created_at"=>"2023-09-06 14:12:17","updated_at"=>"2023-09-06 14:12:17"],
        //     ["id"=>"127","center_cost_id"=>"4","name"=>"4.4.3.4 IVA Regularizações","code"=>"4.4.3.4","created_at"=>"2023-09-06 14:13:33","updated_at"=>"2023-09-06 14:13:33"],
        //     ["id"=>"128","center_cost_id"=>"4","name"=>"4.4.3.4.1 Mensais a favor do sujeito passivo","code"=>"4.4.3.4.1","created_at"=>"2023-09-06 14:14:02","updated_at"=>"2023-09-06 14:14:40"],
        //     ["id"=>"129","center_cost_id"=>"4","name"=>"4.4.3.4.2 Mensais a favor do estado","code"=>"4.4.3.4.2","created_at"=>"2023-09-06 14:15:55","updated_at"=>"2023-09-06 14:15:55"],
        //     ["id"=>"130","center_cost_id"=>"4","name"=>"4.4.3.4.3 Anuais por Cálculos do pro rata definitivo","code"=>"4.4.3.4.3","created_at"=>"2023-09-06 14:17:16","updated_at"=>"2023-09-06 14:17:16"],
        //     ["id"=>"131","center_cost_id"=>"4","name"=>"4.4.3.5 IVA apuramento","code"=>"4.4.3.5","created_at"=>"2023-09-06 14:17:41","updated_at"=>"2023-09-06 14:17:41"],
        //     ["id"=>"132","center_cost_id"=>"4","name"=>"4.4.3.6 IVA Liquidações oficiosas","code"=>"4.4.3.6","created_at"=>"2023-09-06 14:18:31","updated_at"=>"2023-09-06 14:18:31"],
        //     ["id"=>"133","center_cost_id"=>"4","name"=>"4.4.3.7 IVA a pagar","code"=>"4.4.3.7","created_at"=>"2023-09-06 14:18:50","updated_at"=>"2023-09-06 14:18:50"],
        //     ["id"=>"134","center_cost_id"=>"4","name"=>"4.4.3.8 IVA a recuperar","code"=>"4.4.3.8","created_at"=>"2023-09-06 14:19:11","updated_at"=>"2023-09-06 14:19:11"],
        //     ["id"=>"135","center_cost_id"=>"4","name"=>"4.4.3.9 IVA reembolsos pedidos","code"=>"4.4.3.9","created_at"=>"2023-09-06 14:19:46","updated_at"=>"2023-09-06 14:19:46"],
        //     ["id"=>"136","center_cost_id"=>"4","name"=>"4.4.4 Restantes impostos","code"=>"4.4.4","created_at"=>"2023-09-06 14:20:10","updated_at"=>"2023-09-06 14:20:10"],
        //     ["id"=>"137","center_cost_id"=>"4","name"=>"4.4.4.1 Imposto de selo","code"=>"4.4.4.1","created_at"=>"2023-09-06 14:20:30","updated_at"=>"2023-09-06 14:20:30"],
        //     ["id"=>"138","center_cost_id"=>"4","name"=>"4.4.4.2  Imposto de autarquicos","code"=>"4.4.4.2","created_at"=>"2023-09-06 14:21:12","updated_at"=>"2023-09-06 14:21:12"],
        //     ["id"=>"139","center_cost_id"=>"4","name"=>"4.4.5 Retificações de impostos, Contribuições e outros tributos","code"=>"4.4.5","created_at"=>"2023-09-06 14:23:05","updated_at"=>"2023-09-06 14:23:05"],
        //     ["id"=>"140","center_cost_id"=>"4","name"=>"4.4.9 Contribuições para INSS","code"=>"4.4.9","created_at"=>"2023-09-06 14:24:17","updated_at"=>"2023-09-06 14:24:17"],
        //     ["id"=>"141","center_cost_id"=>"4","name"=>"4.5 OUTROS DEVEDORES","code"=>"4.5","created_at"=>"2023-09-06 14:24:37","updated_at"=>"2023-09-06 14:24:37"],
        //     ["id"=>"142","center_cost_id"=>"4","name"=>"4.5.1 Pessoal","code"=>"4.5.1","created_at"=>"2023-09-06 14:25:05","updated_at"=>"2023-09-06 14:25:05"],
        //     ["id"=>"143","center_cost_id"=>"4","name"=>"4.5.1.1 Aiantamento aos Órgãos sociais","code"=>"4.5.1.1","created_at"=>"2023-09-06 14:25:54","updated_at"=>"2023-09-06 14:25:54"],
        //     ["id"=>"144","center_cost_id"=>"4","name"=>"4.5.1.2 Adiantamentos aos trabalhadores","code"=>"4.5.1.2","created_at"=>"2023-09-06 14:26:39","updated_at"=>"2023-09-06 14:26:39"],
        //     ["id"=>"145","center_cost_id"=>"4","name"=>"4.5.1.8 Outras Operações com Órgãos sociais","code"=>"4.5.1.8","created_at"=>"2023-09-06 14:27:30","updated_at"=>"2023-09-06 14:27:30"],
        //     ["id"=>"146","center_cost_id"=>"4","name"=>"4.5.1.9 Outras Operações com trabalhadores","code"=>"4.5.1.9","created_at"=>"2023-09-06 14:28:38","updated_at"=>"2023-09-06 14:28:38"],
        //     ["id"=>"147","center_cost_id"=>"4","name"=>"4.5.2 Subcritores de capital","code"=>"4.5.2","created_at"=>"2023-09-06 14:29:33","updated_at"=>"2023-09-06 14:29:33"],
        //     ["id"=>"148","center_cost_id"=>"4","name"=>"4.5.2.1 Estado e outros orgnanismos Públicos","code"=>"4.5.2.1","created_at"=>"2023-09-06 14:31:43","updated_at"=>"2023-09-06 14:31:43"],
        //     ["id"=>"149","center_cost_id"=>"4","name"=>"4.5.2.2 Entidades privadas","code"=>"4.5.2.2","created_at"=>"2023-09-06 14:32:30","updated_at"=>"2023-09-06 14:32:30"],
        //     ["id"=>"150","center_cost_id"=>"4","name"=>"4.5.2.9 Outras entidades","code"=>"4.5.2.9","created_at"=>"2023-09-06 14:33:04","updated_at"=>"2023-09-06 14:33:04"],
        //     ["id"=>"151","center_cost_id"=>"4","name"=>"4.5.4 Devedores - Sócios, acionistas ou proprietários","code"=>"4.5.4","created_at"=>"2023-09-06 14:34:26","updated_at"=>"2023-09-06 14:34:26"],
        //     ["id"=>"152","center_cost_id"=>"4","name"=>"4.5.4.1 Empréstimos concebidos","code"=>"4.5.4.1","created_at"=>"2023-09-06 14:35:38","updated_at"=>"2023-09-06 14:35:38"],
        //     ["id"=>"153","center_cost_id"=>"4","name"=>"4.5.4.2 Adiantamentos por conta de lucros","code"=>"4.5.4.2","created_at"=>"2023-09-06 14:36:15","updated_at"=>"2023-09-06 14:36:15"],
        //     ["id"=>"154","center_cost_id"=>"4","name"=>"4.5.4.3 Resultados atribuidos","code"=>"4.5.4.3","created_at"=>"2023-09-06 14:36:47","updated_at"=>"2023-09-06 14:36:47"],
        //     ["id"=>"155","center_cost_id"=>"4","name"=>"4.5.4.4 Lucros disponiveis","code"=>"4.5.4.4","created_at"=>"2023-09-06 14:37:16","updated_at"=>"2023-09-06 14:37:16"],
        //     ["id"=>"156","center_cost_id"=>"4","name"=>"4.5.4.9 Outras Operações","code"=>"4.5.4.9","created_at"=>"2023-09-06 14:37:49","updated_at"=>"2023-09-06 14:37:49"],
        //     ["id"=>"157","center_cost_id"=>"4","name"=>"4.5.5 Subsidios a receber","code"=>"4.5.5","created_at"=>"2023-09-06 14:38:18","updated_at"=>"2023-09-06 14:38:18"],
        //     ["id"=>"158","center_cost_id"=>"4","name"=>"4.5.5.1 Estado ou outros organismos publicos","code"=>"4.5.5.1","created_at"=>"2023-09-06 14:38:59","updated_at"=>"2023-09-06 14:38:59"],
        //     ["id"=>"159","center_cost_id"=>"4","name"=>"4.5.5.2 Entidades privadas","code"=>"4.5.5.2","created_at"=>"2023-09-06 14:39:35","updated_at"=>"2023-09-06 14:39:35"],
        //     ["id"=>"160","center_cost_id"=>"4","name"=>"4.5.9 Devedores diversos","code"=>"4.5.9","created_at"=>"2023-09-06 14:40:00","updated_at"=>"2023-09-06 14:40:00"],
        //     ["id"=>"161","center_cost_id"=>"4","name"=>"4.6 OUTROS CREDORES","code"=>"4.6","created_at"=>"2023-09-06 14:41:08","updated_at"=>"2023-09-06 14:41:08"],
        //     ["id"=>"162","center_cost_id"=>"4","name"=>"4.6.1 Fornecedores de investimentos de capital","code"=>"4.6.1","created_at"=>"2023-09-06 17:08:15","updated_at"=>"2023-09-06 17:08:15"],
        //     ["id"=>"163","center_cost_id"=>"4","name"=>"4.6.1.1 Fornecedores de investimentos de capital c-c","code"=>"4.6.1.1","created_at"=>"2023-09-06 17:11:30","updated_at"=>"2023-09-06 17:11:30"],
        //     ["id"=>"164","center_cost_id"=>"4","name"=>"4.6.1.2 Fornecedores de investimentos dd capital - tituloa a pagar","code"=>"4.6.1.2","created_at"=>"2023-09-06 17:12:58","updated_at"=>"2023-09-06 17:12:58"],
        //     ["id"=>"165","center_cost_id"=>"4","name"=>"4.6.1.3 Fornecedores de investimentos de capital adiantamentos","code"=>"4.6.1.3","created_at"=>"2023-09-06 17:14:30","updated_at"=>"2023-09-06 17:14:30"],
        //     ["id"=>"166","center_cost_id"=>"4","name"=>"4.6.1.4 Fornecedores de investientos de capital - Locação financeira","code"=>"4.6.1.4","created_at"=>"2023-09-06 17:15:46","updated_at"=>"2023-09-06 17:15:46"],
        //     ["id"=>"167","center_cost_id"=>"4","name"=>"4.6.1.9 Outras Operações","code"=>"4.6.1.9","created_at"=>"2023-09-06 17:16:36","updated_at"=>"2023-09-06 17:16:36"],
        //     ["id"=>"168","center_cost_id"=>"4","name"=>"4.6.2 Pessoal","code"=>"4.6.2","created_at"=>"2023-09-06 17:17:03","updated_at"=>"2023-09-06 17:17:03"],
        //     ["id"=>"169","center_cost_id"=>"4","name"=>"4.6.2.2 Remunerações a pagar aos trabalhadores","code"=>"4.6.2.2","created_at"=>"2023-09-06 17:20:08","updated_at"=>"2023-09-06 17:20:08"],
        //     ["id"=>"170","center_cost_id"=>"4","name"=>"4.6.2.8 Outros Operações com órgãos sociais","code"=>"4.6.2.8","created_at"=>"2023-09-06 17:21:56","updated_at"=>"2023-09-06 17:21:56"],
        //     ["id"=>"171","center_cost_id"=>"4","name"=>"4.6.2.9 Outras Operações com trbalhadores","code"=>"4.6.2.9","created_at"=>"2023-09-06 17:23:05","updated_at"=>"2023-09-06 17:23:05"],
        //     ["id"=>"172","center_cost_id"=>"4","name"=>"4.6.3 Sindicatos","code"=>"4.6.3","created_at"=>"2023-09-06 17:24:41","updated_at"=>"2023-09-06 17:24:41"],
        //     ["id"=>"173","center_cost_id"=>"4","name"=>"4.6.6 Consultorios, assessores e intermediários","code"=>"4.6.6","created_at"=>"2023-09-06 17:26:02","updated_at"=>"2023-09-06 17:26:02"],
        //     ["id"=>"174","center_cost_id"=>"4","name"=>"4.6.7 Credores - sócio, acionistas ou proprietários","code"=>"4.6.7","created_at"=>"2023-09-06 17:28:11","updated_at"=>"2023-09-06 17:28:11"],
        //     ["id"=>"175","center_cost_id"=>"4","name"=>"4.6.7.1 Emprestimos obtidos","code"=>"4.6.7.1","created_at"=>"2023-09-06 17:28:40","updated_at"=>"2023-09-06 17:28:40"],
        //     ["id"=>"176","center_cost_id"=>"4","name"=>"4.6.7.3 Resultados atribuidos","code"=>"4.6.7.3","created_at"=>"2023-09-06 17:29:16","updated_at"=>"2023-09-06 17:29:16"],
        //     ["id"=>"177","center_cost_id"=>"4","name"=>"4.6.7.4 Lucros dispiniveis","code"=>"4.6.7.4","created_at"=>"2023-09-06 17:29:51","updated_at"=>"2023-09-06 17:29:51"],
        //     ["id"=>"178","center_cost_id"=>"4","name"=>"4.6.9  Credores diversos","code"=>"4.6.9","created_at"=>"2023-09-06 17:30:19","updated_at"=>"2023-09-06 17:30:19"],
        //     ["id"=>"179","center_cost_id"=>"4","name"=>"4.7 AJUSTAMENTOS DE CONTA  RECEBER","code"=>"4.7","created_at"=>"2023-09-06 17:31:04","updated_at"=>"2023-09-06 17:31:04"],
        //     ["id"=>"180","center_cost_id"=>"4","name"=>"4.7.1 Clientes","code"=>"4.7.1","created_at"=>"2023-09-06 17:31:26","updated_at"=>"2023-09-06 17:31:26"],
        //     ["id"=>"181","center_cost_id"=>"4","name"=>"4.7.2 Outros devedores","code"=>"4.7.2","created_at"=>"2023-09-06 17:31:52","updated_at"=>"2023-09-06 17:31:52"],
        //     ["id"=>"182","center_cost_id"=>"4","name"=>"4.8 PROVISÕES","code"=>"4.8","created_at"=>"2023-09-06 17:32:43","updated_at"=>"2023-09-06 17:32:43"],
        //     ["id"=>"183","center_cost_id"=>"4","name"=>"4.9.1 Acréscimo de gastos","code"=>"4.9.1","created_at"=>"2023-09-06 17:35:55","updated_at"=>"2023-09-06 17:36:21"],
        //     ["id"=>"184","center_cost_id"=>"4","name"=>"4.9.1.1 Juros a pagar","code"=>"4.9.1.1","created_at"=>"2023-09-06 17:36:53","updated_at"=>"2023-09-06 17:36:53"],
        //     ["id"=>"185","center_cost_id"=>"4","name"=>"4.9.1.2 Remunerações a pagar","code"=>"4.9.1.2","created_at"=>"2023-09-06 17:38:20","updated_at"=>"2023-09-06 17:38:20"],
        //     ["id"=>"186","center_cost_id"=>"4","name"=>"4.9.1.9 Outros acrescimos de gastos","code"=>"4.9.1.9","created_at"=>"2023-09-06 17:39:13","updated_at"=>"2023-09-06 17:39:13"],
        //     ["id"=>"187","center_cost_id"=>"4","name"=>"4.9.2 Rendimentos diferidos","code"=>"4.9.2","created_at"=>"2023-09-06 17:39:44","updated_at"=>"2023-09-06 17:39:44"],
        //     ["id"=>"188","center_cost_id"=>"4","name"=>"4.9.2.3 Reditos de contratos de construção","code"=>"4.9.2.3","created_at"=>"2023-09-06 17:41:14","updated_at"=>"2023-09-06 17:41:14"],
        //     ["id"=>"189","center_cost_id"=>"4","name"=>"4.9.2.4 Subsidios para investimentos","code"=>"4.9.2.4","created_at"=>"2023-09-06 17:41:36","updated_at"=>"2023-09-06 17:50:16"],
        //     ["id"=>"190","center_cost_id"=>"7","name"=>"71. Vendas","code"=>"7.1","created_at"=>"2023-09-06 17:47:06","updated_at"=>"2023-09-06 17:47:06"],
        //     ["id"=>"191","center_cost_id"=>"7","name"=>"7.1.1 Mercadorias","code"=>"7.1.1","created_at"=>"2023-09-06 17:47:21","updated_at"=>"2023-09-06 17:47:21"],
        //     ["id"=>"192","center_cost_id"=>"7","name"=>"7.1.2 Produtos acabados e intermédios","code"=>"7.1.2","created_at"=>"2023-09-06 17:47:39","updated_at"=>"2023-09-06 17:47:39"],
        //     ["id"=>"193","center_cost_id"=>"7","name"=>"7.1.3 Subprodutos, desperdicios, residuos e refugos","code"=>"7.1.3","created_at"=>"2023-09-06 17:49:09","updated_at"=>"2023-09-06 17:49:09"],
        //     ["id"=>"194","center_cost_id"=>"7","name"=>"7.1.4 Activos biológicos","code"=>"7.1.4","created_at"=>"2023-09-06 17:49:32","updated_at"=>"2023-09-06 17:49:32"],
        //     ["id"=>"195","center_cost_id"=>"7","name"=>"7.1.5 IVA das vendas com imposto incluído","code"=>"7.1.5","created_at"=>"2023-09-06 17:49:55","updated_at"=>"2023-09-06 17:49:55"],
        //     ["id"=>"196","center_cost_id"=>"7","name"=>"7.1.6 Devolução de vendas","code"=>"7.1.6","created_at"=>"2023-09-06 17:50:12","updated_at"=>"2023-09-06 17:50:12"],
        //     ["id"=>"197","center_cost_id"=>"7","name"=>"7.1.7 Descontos e abatimentos","code"=>"7.1.7","created_at"=>"2023-09-06 17:50:25","updated_at"=>"2023-09-06 17:50:25"],
        //     ["id"=>"198","center_cost_id"=>"7","name"=>"7.2 PRESTAÇÃO DE SERVIÇOS","code"=>"7.2","created_at"=>"2023-09-06 17:50:40","updated_at"=>"2023-09-06 17:50:40"],
        //     ["id"=>"199","center_cost_id"=>"7","name"=>"7.2.1 IVA da prestação de serviços","code"=>"7.2.1","created_at"=>"2023-09-06 17:50:57","updated_at"=>"2023-09-06 17:50:57"],
        //     ["id"=>"200","center_cost_id"=>"7","name"=>"7.2.6 Descontos de abatimentos","code"=>"7.2.6","created_at"=>"2023-09-06 17:51:11","updated_at"=>"2023-09-06 17:51:11"],
        //     ["id"=>"201","center_cost_id"=>"7","name"=>"7.3 INVESTIMENTO REALIZADOS PELA PRÓPRIA EMPRESA","code"=>"7.3","created_at"=>"2023-09-06 17:51:29","updated_at"=>"2023-09-06 17:51:29"],
        //     ["id"=>"202","center_cost_id"=>"7","name"=>"7.3.1 Investimentos financeiros","code"=>"7.3.1","created_at"=>"2023-09-06 17:51:44","updated_at"=>"2023-09-06 17:51:44"],
        //     ["id"=>"203","center_cost_id"=>"7","name"=>"7.3.2 Activos tangíveis","code"=>"7.3.2","created_at"=>"2023-09-06 17:52:05","updated_at"=>"2023-09-06 17:52:05"],
        //     ["id"=>"204","center_cost_id"=>"7","name"=>"7.3.3 Activos intangíveis","code"=>"7.3.3","created_at"=>"2023-09-06 17:52:21","updated_at"=>"2023-09-06 17:52:21"],
        //     ["id"=>"205","center_cost_id"=>"7","name"=>"7.3.4 Investimentos em curso","code"=>"7.3.4","created_at"=>"2023-09-06 17:52:32","updated_at"=>"2023-09-06 17:52:32"],
        //     ["id"=>"206","center_cost_id"=>"4","name"=>"4.9.2.9 Outros rendimentos diferidos","code"=>"4.9.2.9","created_at"=>"2023-09-06 17:52:47","updated_at"=>"2023-09-06 17:52:47"],
        //     ["id"=>"207","center_cost_id"=>"7","name"=>"7.4 REVERSÕES DO PERÍODO","code"=>"7.4","created_at"=>"2023-09-06 17:52:51","updated_at"=>"2023-09-06 17:52:51"],
        //     ["id"=>"208","center_cost_id"=>"7","name"=>"7.4.1 De perdas por imparidade","code"=>"7.4.1","created_at"=>"2023-09-06 17:53:07","updated_at"=>"2023-09-06 17:53:07"],
        //     ["id"=>"209","center_cost_id"=>"4","name"=>"4.9.3 Acrescimos de rendimentos","code"=>"4.9.3","created_at"=>"2023-09-06 17:53:21","updated_at"=>"2023-09-06 17:53:21"],
        //     ["id"=>"210","center_cost_id"=>"7","name"=>"7.4.1.1 Ajustamentos de inventários para o valor realizável líquido","code"=>"7.4.1.1","created_at"=>"2023-09-06 17:53:33","updated_at"=>"2023-09-06 17:53:33"],
        //     ["id"=>"211","center_cost_id"=>"7","name"=>"7.4.1.2 Investimentos financeiros","code"=>"7.4.1.2","created_at"=>"2023-09-06 17:53:48","updated_at"=>"2023-09-06 17:53:48"],
        //     ["id"=>"212","center_cost_id"=>"4","name"=>"4.9.3.1 Juros a receber","code"=>"4.9.3.1","created_at"=>"2023-09-06 17:53:56","updated_at"=>"2023-09-06 17:53:56"],
        //     ["id"=>"213","center_cost_id"=>"7","name"=>"7.4.1.3 Activos tangíveis de investimento","code"=>"7.4.1.3","created_at"=>"2023-09-06 17:54:07","updated_at"=>"2023-09-06 17:54:07"],
        //     ["id"=>"214","center_cost_id"=>"7","name"=>"7.4.1.4 Contas a receber","code"=>"7.4.1.4","created_at"=>"2023-09-06 17:54:25","updated_at"=>"2023-09-06 17:54:25"],
        //     ["id"=>"215","center_cost_id"=>"7","name"=>"7.4.2 De amortizações","code"=>"7.4.2","created_at"=>"2023-09-06 17:54:44","updated_at"=>"2023-09-06 17:54:44"],
        //     ["id"=>"216","center_cost_id"=>"4","name"=>"4.9.3.3 Reditos de contartos  de construção","code"=>"4.9.3.3","created_at"=>"2023-09-06 17:54:45","updated_at"=>"2023-09-06 17:54:45"],
        //     ["id"=>"217","center_cost_id"=>"7","name"=>"7.4.2.1 Activos tangíveis","code"=>"7.4.2.1","created_at"=>"2023-09-06 17:55:04","updated_at"=>"2023-09-06 17:55:04"],
        //     ["id"=>"218","center_cost_id"=>"7","name"=>"7.4.2.2 Activos intagiveis","code"=>"7.4.2.2","created_at"=>"2023-09-06 17:55:17","updated_at"=>"2023-09-06 17:55:17"],
        //     ["id"=>"219","center_cost_id"=>"4","name"=>"4.9.3.9 Outros acrescimos de rendimentos","code"=>"4.9.3.9","created_at"=>"2023-09-06 17:55:20","updated_at"=>"2023-09-06 17:55:20"],
        //     ["id"=>"220","center_cost_id"=>"7","name"=>"7.4.2.3 Activos tangíveis de investimento","code"=>"7.4.2.3","created_at"=>"2023-09-06 17:55:33","updated_at"=>"2023-09-06 17:55:33"],
        //     ["id"=>"221","center_cost_id"=>"7","name"=>"7.4.3 De provisões","code"=>"7.4.3","created_at"=>"2023-09-06 17:55:46","updated_at"=>"2023-09-06 17:55:46"],
        //     ["id"=>"222","center_cost_id"=>"4","name"=>"4.9.4 Gastos diferidos","code"=>"4.9.4","created_at"=>"2023-09-06 17:55:48","updated_at"=>"2023-09-06 17:55:48"],
        //     ["id"=>"223","center_cost_id"=>"7","name"=>"7.4.3.1 Processos judiciais em curso","code"=>"7.4.3.1","created_at"=>"2023-09-06 17:56:05","updated_at"=>"2023-09-06 17:56:05"],
        //     ["id"=>"224","center_cost_id"=>"5","name"=>"5.1 CAPITAL","code"=>"5.1","created_at"=>"2023-09-06 17:56:27","updated_at"=>"2023-09-06 17:56:27"],
        //     ["id"=>"225","center_cost_id"=>"7","name"=>"7.4.3.2 Acidentes no trabalho e doenças profissionais","code"=>"7.4.3.2","created_at"=>"2023-09-06 17:56:32","updated_at"=>"2023-09-06 17:56:32"],
        //     ["id"=>"226","center_cost_id"=>"7","name"=>"7.4.3.3 Impostos","code"=>"7.4.3.3","created_at"=>"2023-09-06 17:56:46","updated_at"=>"2023-09-06 17:56:46"],
        //     ["id"=>"227","center_cost_id"=>"7","name"=>"7.4.3.4 Reestruturação de negocios","code"=>"7.4.3.4","created_at"=>"2023-09-06 17:57:02","updated_at"=>"2023-09-06 17:57:02"],
        //     ["id"=>"228","center_cost_id"=>"7","name"=>"7.4.3.5 Contratos onerosos","code"=>"7.4.3.5","created_at"=>"2023-09-06 17:57:15","updated_at"=>"2023-09-06 17:57:15"],
        //     ["id"=>"229","center_cost_id"=>"7","name"=>"7.4.3.6 Garantias a clientes","code"=>"7.4.3.6","created_at"=>"2023-09-06 17:57:27","updated_at"=>"2023-09-06 17:57:27"],
        //     ["id"=>"230","center_cost_id"=>"7","name"=>"7.4.3.7 Perdas em contratos de contrução","code"=>"7.4.3.7","created_at"=>"2023-09-06 17:57:41","updated_at"=>"2023-09-06 17:57:41"],
        //     ["id"=>"231","center_cost_id"=>"5","name"=>"5.2 ACÇÕES OU QUOTAS PRÓPRIAS","code"=>"5.2","created_at"=>"2023-09-06 17:57:55","updated_at"=>"2023-09-06 17:57:55"],
        //     ["id"=>"232","center_cost_id"=>"7","name"=>"7.4.3.9 Outras provisões","code"=>"7.4.3.9","created_at"=>"2023-09-06 17:58:08","updated_at"=>"2023-09-06 17:58:08"],
        //     ["id"=>"233","center_cost_id"=>"5","name"=>"5.2.1 Valor nominal","code"=>"5.2.1","created_at"=>"2023-09-06 17:58:16","updated_at"=>"2023-09-06 17:58:16"],
        //     ["id"=>"234","center_cost_id"=>"7","name"=>"7.5 RENDIMENTOS SUPLEMENTARES","code"=>"7.5","created_at"=>"2023-09-06 17:58:18","updated_at"=>"2023-09-06 17:58:18"],
        //     ["id"=>"235","center_cost_id"=>"7","name"=>"7.6 OUTROS RENDIMENTOS E GANHOS OPERACIONAIS","code"=>"7.6","created_at"=>"2023-09-06 17:58:32","updated_at"=>"2023-09-06 17:58:32"],
        //     ["id"=>"236","center_cost_id"=>"5","name"=>"5.2.2 Descontos premios","code"=>"5.2.2","created_at"=>"2023-09-06 17:58:34","updated_at"=>"2023-09-06 17:58:34"],
        //     ["id"=>"237","center_cost_id"=>"7","name"=>"7.6.1 Subsidios para investimentos","code"=>"7.6.1","created_at"=>"2023-09-06 17:58:52","updated_at"=>"2023-09-06 17:58:52"],
        //     ["id"=>"238","center_cost_id"=>"7","name"=>"7.6.1.1 Do estado e outros organismos públicos","code"=>"7.6.1.1","created_at"=>"2023-09-06 17:59:17","updated_at"=>"2023-09-06 17:59:17"],
        //     ["id"=>"239","center_cost_id"=>"7","name"=>"7.6.1.9 De outras entidades","code"=>"7.6.1.9","created_at"=>"2023-09-06 17:59:34","updated_at"=>"2023-09-06 17:59:34"],
        //     ["id"=>"240","center_cost_id"=>"5","name"=>"5.3 PRESTAÇÕES SUPLEMENTARES","code"=>"5.3","created_at"=>"2023-09-06 17:59:43","updated_at"=>"2023-09-06 17:59:43"],
        //     ["id"=>"241","center_cost_id"=>"7","name"=>"7.6.2 Subsidios a exploração","code"=>"7.6.2","created_at"=>"2023-09-06 18:00:01","updated_at"=>"2023-09-06 18:00:01"],
        //     ["id"=>"242","center_cost_id"=>"7","name"=>"7.6.2.1 Do estado estado e outros organismos públicos","code"=>"7.6.2.1","created_at"=>"2023-09-06 18:00:32","updated_at"=>"2023-09-06 18:00:32"],
        //     ["id"=>"243","center_cost_id"=>"7","name"=>"7.6.2.9 De outras entidades","code"=>"7.6.2.9","created_at"=>"2023-09-06 18:00:58","updated_at"=>"2023-09-06 18:00:58"],
        //     ["id"=>"244","center_cost_id"=>"7","name"=>"7.6.3 Ganhos em investimentos de capital","code"=>"7.6.3","created_at"=>"2023-09-06 18:01:19","updated_at"=>"2023-09-06 18:01:19"],
        //     ["id"=>"245","center_cost_id"=>"7","name"=>"7.6.3.1 Alienação","code"=>"7.6.3.1","created_at"=>"2023-09-06 18:01:32","updated_at"=>"2023-09-06 18:01:32"],
        //     ["id"=>"246","center_cost_id"=>"5","name"=>"5.4 PRÉMIOS DE EMISSÃO DE ACÇÕES OU QUOTAS","code"=>"5.4","created_at"=>"2023-09-06 18:01:32","updated_at"=>"2023-09-06 18:01:32"],
        //     ["id"=>"247","center_cost_id"=>"7","name"=>"7.6.3.2 Sinistros","code"=>"7.6.3.2","created_at"=>"2023-09-06 18:01:40","updated_at"=>"2023-09-06 18:01:40"],
        //     ["id"=>"248","center_cost_id"=>"5","name"=>"5.5 RESERVAS","code"=>"5.5","created_at"=>"2023-09-06 18:01:51","updated_at"=>"2023-09-06 18:01:51"],
        //     ["id"=>"249","center_cost_id"=>"7","name"=>"7.6.4 Ganhos em inventários e activos biológicos","code"=>"7.6.4","created_at"=>"2023-09-06 18:02:08","updated_at"=>"2023-09-06 18:02:08"],
        //     ["id"=>"250","center_cost_id"=>"7","name"=>"7.6.4.1 Sinistros","code"=>"7.6.4.1","created_at"=>"2023-09-06 18:02:19","updated_at"=>"2023-09-06 18:02:19"],
        //     ["id"=>"251","center_cost_id"=>"5","name"=>"5.5.1 Reservas legais","code"=>"5.5.1","created_at"=>"2023-09-06 18:02:21","updated_at"=>"2023-09-06 18:02:21"],
        //     ["id"=>"252","center_cost_id"=>"7","name"=>"7.6.4.2 Sobras","code"=>"7.6.4.2","created_at"=>"2023-09-06 18:02:30","updated_at"=>"2023-09-06 18:02:30"],
        //     ["id"=>"253","center_cost_id"=>"7","name"=>"7.6.4.9 Outros","code"=>"7.6.4.9","created_at"=>"2023-09-06 18:02:47","updated_at"=>"2023-09-06 18:02:47"],
        //     ["id"=>"254","center_cost_id"=>"5","name"=>"5.5.2 Reservas estatuarias","code"=>"5.5.2","created_at"=>"2023-09-06 18:02:52","updated_at"=>"2023-09-06 18:02:52"],
        //     ["id"=>"255","center_cost_id"=>"5","name"=>"5.5.3 Reservas livres","code"=>"5.5.3","created_at"=>"2023-09-06 18:03:17","updated_at"=>"2023-09-06 18:03:17"],
        //     ["id"=>"256","center_cost_id"=>"7","name"=>"7.6.9 Outros rendimentos alheios ao valor acrescentado","code"=>"7.6.9","created_at"=>"2023-09-06 18:04:22","updated_at"=>"2023-09-06 18:04:22"],
        //     ["id"=>"257","center_cost_id"=>"7","name"=>"7.6.9.1 Restituição de impostos","code"=>"7.6.9.1","created_at"=>"2023-09-06 18:04:34","updated_at"=>"2023-09-06 18:04:34"],
        //     ["id"=>"258","center_cost_id"=>"7","name"=>"7.6.9.2 Beneficios de penalidades contratuais","code"=>"7.6.9.2","created_at"=>"2023-09-06 18:04:52","updated_at"=>"2023-09-06 18:04:52"],
        //     ["id"=>"259","center_cost_id"=>"7","name"=>"7.6.9.3 Excesso de estimativa para impostos","code"=>"7.6.9.3","created_at"=>"2023-09-06 18:05:08","updated_at"=>"2023-09-06 18:05:08"],
        //     ["id"=>"260","center_cost_id"=>"5","name"=>"5.6 EXCEDENTES DE REVALORIZAÇÃO DE ACTIVOS TANGIVEIS E INTAGIVEIS","code"=>"5.6","created_at"=>"2023-09-06 18:05:09","updated_at"=>"2023-09-06 18:05:09"],
        //     ["id"=>"261","center_cost_id"=>"7","name"=>"7.6.9.9 Outros","code"=>"7.6.9.9","created_at"=>"2023-09-06 18:05:17","updated_at"=>"2023-09-06 18:05:17"],
        //     ["id"=>"262","center_cost_id"=>"7","name"=>"7.8 RENDIMENTOS E GANHOS FINCANCEIROS","code"=>"7.8","created_at"=>"2023-09-06 18:05:31","updated_at"=>"2023-09-06 18:05:31"],
        //     ["id"=>"263","center_cost_id"=>"5","name"=>"5.6.1 Revalorizacao legais","code"=>"5.6.1","created_at"=>"2023-09-06 18:05:37","updated_at"=>"2023-09-06 18:05:37"],
        //     ["id"=>"264","center_cost_id"=>"7","name"=>"7.8.1 Juros obtidos","code"=>"7.8.1","created_at"=>"2023-09-06 18:05:41","updated_at"=>"2023-09-06 18:05:41"],
        //     ["id"=>"265","center_cost_id"=>"5","name"=>"5.6.2 Outros excessos","code"=>"5.6.2","created_at"=>"2023-09-06 18:06:04","updated_at"=>"2023-09-06 18:06:04"],
        //     ["id"=>"266","center_cost_id"=>"7","name"=>"7.8.1.1 Depósitos bancários","code"=>"7.8.1.1","created_at"=>"2023-09-06 18:06:06","updated_at"=>"2023-09-06 18:06:06"],
        //     ["id"=>"267","center_cost_id"=>"5","name"=>"5.9 RESULTADOS TRANSITADOS","code"=>"5.9","created_at"=>"2023-09-06 18:06:22","updated_at"=>"2023-09-06 18:06:22"],
        //     ["id"=>"268","center_cost_id"=>"7","name"=>"7.8.2 Rendimentos de activos tangíveis de investimento","code"=>"7.8.2","created_at"=>"2023-09-06 18:06:39","updated_at"=>"2023-09-06 18:06:39"],
        //     ["id"=>"269","center_cost_id"=>"7","name"=>"7.8.3 Rendimentos de investimentos financeiros","code"=>"7.8.3","created_at"=>"2023-09-06 18:07:01","updated_at"=>"2023-09-06 18:07:01"],
        //     ["id"=>"270","center_cost_id"=>"6","name"=>"6.1 CUSTOS DOS INVENTARIOS","code"=>"6.1","created_at"=>"2023-09-06 18:07:14","updated_at"=>"2023-09-06 18:07:14"],
        //     ["id"=>"271","center_cost_id"=>"7","name"=>"7.8.4 Diferenças de cambio favoráveis","code"=>"7.8.4","created_at"=>"2023-09-06 18:07:18","updated_at"=>"2023-09-06 18:07:18"],
        //     ["id"=>"272","center_cost_id"=>"7","name"=>"7.8.4.1 Realizadas","code"=>"7.8.4.1","created_at"=>"2023-09-06 18:07:27","updated_at"=>"2023-09-06 18:07:27"],
        //     ["id"=>"273","center_cost_id"=>"7","name"=>"7.8.4.2","code"=>"7.8.4.2 Não realizadas","created_at"=>"2023-09-06 18:07:37","updated_at"=>"2023-09-06 18:07:37"],
        //     ["id"=>"274","center_cost_id"=>"7","name"=>"7.8.5 Descontos de pronto pagamento obtidos","code"=>"7.8.5","created_at"=>"2023-09-06 18:07:54","updated_at"=>"2023-09-06 18:07:54"],
        //     ["id"=>"275","center_cost_id"=>"6","name"=>"6.1.1 Custos dos inventarios vendidos ou consumidos","code"=>"6.1.1","created_at"=>"2023-09-06 18:08:01","updated_at"=>"2023-09-06 18:08:35"],
        //     ["id"=>"276","center_cost_id"=>"7","name"=>"7.8.9 Outros rendimentos e ganhos financeiros","code"=>"7.8.9","created_at"=>"2023-09-06 18:08:11","updated_at"=>"2023-09-06 18:08:11"],
        //     ["id"=>"277","center_cost_id"=>"8","name"=>"8.1 RESULTADOS OPERACIONAIS","code"=>"8.1","created_at"=>"2023-09-06 18:08:49","updated_at"=>"2023-09-06 18:08:49"],
        //     ["id"=>"278","center_cost_id"=>"8","name"=>"8.2 RESULTADOS FINANCEIROS","code"=>"8.2","created_at"=>"2023-09-06 18:09:01","updated_at"=>"2023-09-06 18:09:01"],
        //     ["id"=>"279","center_cost_id"=>"8","name"=>"8.3 RESULTADOS CORRENTES","code"=>"8.3","created_at"=>"2023-09-06 18:09:13","updated_at"=>"2023-09-06 18:09:13"],
        //     ["id"=>"280","center_cost_id"=>"8","name"=>"8.5 IMPOSTO SOBRE O RENDIMENTO","code"=>"8.5","created_at"=>"2023-09-06 18:09:25","updated_at"=>"2023-09-06 18:09:25"],
        //     ["id"=>"281","center_cost_id"=>"8","name"=>"8.8 RESULTADO LIQUIDO DO PERIODO","code"=>"8.8","created_at"=>"2023-09-06 18:09:37","updated_at"=>"2023-09-06 18:09:37"],
        //     ["id"=>"282","center_cost_id"=>"8","name"=>"8.9 DIVIDENDOS ANTECIPADOS","code"=>"8.9","created_at"=>"2023-09-06 18:09:50","updated_at"=>"2023-09-06 18:09:50"],
        //     ["id"=>"283","center_cost_id"=>"6","name"=>"6.1.1.2 De mercadorias","code"=>"6.1.1.2","created_at"=>"2023-09-06 18:25:16","updated_at"=>"2023-09-06 18:25:16"],
        //     ["id"=>"284","center_cost_id"=>"6","name"=>"6.1.1.6 De matérias primas, auxiliares e materiais","code"=>"6.1.1.6","created_at"=>"2023-09-06 18:26:42","updated_at"=>"2023-09-06 18:26:42"],
        //     ["id"=>"285","center_cost_id"=>"6","name"=>"6.1.1.6.1 Matérias primas","code"=>"6.1.1.6.1","created_at"=>"2023-09-06 18:28:51","updated_at"=>"2023-09-06 18:28:51"],
        //     ["id"=>"286","center_cost_id"=>"6","name"=>"6.1.1.6.2 Materias auxiliares","code"=>"6.1.1.6.2","created_at"=>"2023-09-06 18:29:35","updated_at"=>"2023-09-06 18:29:35"],
        //     ["id"=>"287","center_cost_id"=>"6","name"=>"6.11.6.3 Materiais","code"=>"6.11.6.3","created_at"=>"2023-09-06 18:30:17","updated_at"=>"2023-09-06 18:30:17"],
        //     ["id"=>"288","center_cost_id"=>"6","name"=>"6.1.1.7 Activos biológicos","code"=>"6.1.1.7","created_at"=>"2023-09-06 18:31:25","updated_at"=>"2023-09-06 18:31:25"],
        //     ["id"=>"289","center_cost_id"=>"6","name"=>"6.1.2 variação da produção","code"=>"6.1.2","created_at"=>"2023-09-06 18:32:26","updated_at"=>"2023-09-06 18:32:26"],
        //     ["id"=>"290","center_cost_id"=>"6","name"=>"6.1.2.1 Produtos acabados e intermedios","code"=>"6.1.2.1","created_at"=>"2023-09-06 18:32:59","updated_at"=>"2023-09-06 18:34:05"],
        //     ["id"=>"291","center_cost_id"=>"6","name"=>"6.1.2.2 Subprodutos, disperdicios, residuos e refugos","code"=>"6.1.2.2","created_at"=>"2023-09-06 18:35:32","updated_at"=>"2023-09-06 18:35:32"],
        //     ["id"=>"292","center_cost_id"=>"6","name"=>"6.1.2.3 Produtos e serviços em cursos","code"=>"6.1.2.3","created_at"=>"2023-09-06 18:36:20","updated_at"=>"2023-09-06 18:36:20"],
        //     ["id"=>"293","center_cost_id"=>"6","name"=>"6.2 GASTOS COM O PESSOAL","code"=>"6.2","created_at"=>"2023-09-06 18:36:47","updated_at"=>"2023-09-06 18:36:47"],
        //     ["id"=>"294","center_cost_id"=>"6","name"=>"6.2.1 Remunerações dos órgãos sociais","code"=>"6.2.1","created_at"=>"2023-09-06 18:57:18","updated_at"=>"2023-09-06 18:57:18"],
        //     ["id"=>"295","center_cost_id"=>"6","name"=>"6.2.2 Remunerações dos trabalhadores","code"=>"6.2.2","created_at"=>"2023-09-06 18:58:04","updated_at"=>"2023-09-06 18:58:04"],
        //     ["id"=>"296","center_cost_id"=>"6","name"=>"6.2.3 Encargos sobre remunerações","code"=>"6.2.3","created_at"=>"2023-09-06 18:59:01","updated_at"=>"2023-09-06 18:59:01"],
        //     ["id"=>"297","center_cost_id"=>"6","name"=>"6.2.5 Ajudas de custo","code"=>"6.2.5","created_at"=>"2023-09-06 18:59:37","updated_at"=>"2023-09-06 18:59:37"],
        //     ["id"=>"298","center_cost_id"=>"6","name"=>"6.2.5.1  Ajuda de custo tributaveis","code"=>"6.2.5.1","created_at"=>"2023-09-06 19:00:27","updated_at"=>"2023-09-06 19:00:27"],
        //     ["id"=>"299","center_cost_id"=>"6","name"=>"6.2.5.2 Ajuda de custo nao tributaveis","code"=>"6.2.5.2","created_at"=>"2023-09-06 19:01:01","updated_at"=>"2023-09-06 19:01:01"],
        //     ["id"=>"300","center_cost_id"=>"6","name"=>"6.2.6 Indemnizações","code"=>"6.2.6","created_at"=>"2023-09-06 19:01:58","updated_at"=>"2023-09-06 19:01:58"],
        //     ["id"=>"301","center_cost_id"=>"6","name"=>"6.2.6.1 Indemnizações - risco seguraveis","code"=>"6.2.6.1","created_at"=>"2023-09-06 19:02:55","updated_at"=>"2023-09-06 19:02:55"],
        //     ["id"=>"302","center_cost_id"=>"6","name"=>"6.2.6.2 Indemnizações - Outras","code"=>"6.2.6.2","created_at"=>"2023-09-06 19:08:08","updated_at"=>"2023-09-06 19:08:08"],
        //     ["id"=>"303","center_cost_id"=>"6","name"=>"6.2.7 Seguros de acidentes no trabalhos doenças profissionais","code"=>"6.2.7","created_at"=>"2023-09-06 19:09:34","updated_at"=>"2023-09-06 19:09:34"],
        //     ["id"=>"304","center_cost_id"=>"6","name"=>"6.2.8 Gastos de accao social","code"=>"6.2.8","created_at"=>"2023-09-06 19:10:09","updated_at"=>"2023-09-06 19:10:09"],
        //     ["id"=>"305","center_cost_id"=>"6","name"=>"6.2.9 Outros gastos com pessoal","code"=>"6.2.9","created_at"=>"2023-09-06 19:10:45","updated_at"=>"2023-09-06 19:10:45"],
        //     ["id"=>"306","center_cost_id"=>"6","name"=>"6.3 FORNECIMENTOS E SERVIÇOS DE TERCEIROS","code"=>"6.3","created_at"=>"2023-09-06 19:11:55","updated_at"=>"2023-09-06 19:11:55"],
        //     ["id"=>"307","center_cost_id"=>"6","name"=>"6.3.1 Subcontratos","code"=>"6.3.1","created_at"=>"2023-09-06 19:12:22","updated_at"=>"2023-09-06 19:12:22"],
        //     ["id"=>"308","center_cost_id"=>"6","name"=>"6.3.2 Fornevimentos e serviços","code"=>"6.3.2","created_at"=>"2023-09-06 19:13:09","updated_at"=>"2023-09-06 19:13:09"],
        //     ["id"=>"309","center_cost_id"=>"6","name"=>"6.3.2.1.1 Água","code"=>"6.3.2.1.1","created_at"=>"2023-09-06 19:14:12","updated_at"=>"2023-09-06 19:14:12"],
        //     ["id"=>"310","center_cost_id"=>"6","name"=>"6.3.2.1.2 Electricidade","code"=>"6.3.2.1.2","created_at"=>"2023-09-06 19:15:00","updated_at"=>"2023-09-06 19:15:00"],
        //     ["id"=>"311","center_cost_id"=>"6","name"=>"6.3.2.1.3 Combustiveis","code"=>"6.3.2.1.3","created_at"=>"2023-09-06 19:15:27","updated_at"=>"2023-09-06 19:15:27"],
        //     ["id"=>"312","center_cost_id"=>"6","name"=>"6.3.2.1.3.1 Gasoleo","code"=>"6.3.2.1.3.1","created_at"=>"2023-09-06 19:16:01","updated_at"=>"2023-09-06 19:16:01"],
        //     ["id"=>"313","center_cost_id"=>"6","name"=>"6.3.2.1.3.1.1 Gasoleo - Viaturas ligeiras de passageiros","code"=>"6.3.2.1.3.1.1","created_at"=>"2023-09-06 19:16:57","updated_at"=>"2023-09-06 19:16:57"],
        //     ["id"=>"314","center_cost_id"=>"6","name"=>"6.3.2.1.3.1.2 Gasoleo - Outros","code"=>"6.3.2.1.3.1.2","created_at"=>"2023-09-06 19:18:05","updated_at"=>"2023-09-06 19:18:05"],
        //     ["id"=>"315","center_cost_id"=>"6","name"=>"6.3.2.1.3.2 Restantes combustiveis","code"=>"6.3.2.1.3.2","created_at"=>"2023-09-06 19:18:44","updated_at"=>"2023-09-06 19:18:44"],
        //     ["id"=>"316","center_cost_id"=>"6","name"=>"6.3.2.1.3.2.1 Restantes combustiveis - viaturas ligeiras de passageiros","code"=>"6.3.2.1.3.2.1","created_at"=>"2023-09-06 19:22:24","updated_at"=>"2023-09-06 19:22:24"],
        //     ["id"=>"317","center_cost_id"=>"6","name"=>"6.3.2.1.3.2.2 Restantes combustiveis - Outros","code"=>"6.3.2.1.3.2.2","created_at"=>"2023-09-06 19:23:31","updated_at"=>"2023-09-06 19:23:31"],
        //     ["id"=>"318","center_cost_id"=>"6","name"=>"6.3.2.1.3.3 Lubrificantes","code"=>"6.3.2.1.3.3","created_at"=>"2023-09-06 19:23:54","updated_at"=>"2023-09-06 19:23:54"],
        //     ["id"=>"319","center_cost_id"=>"6","name"=>"6.3.2.1.3.3.1 Lubrificantes - viaturas ligeiros de passageiros","code"=>"6.3.2.1.3.3.1","created_at"=>"2023-09-06 19:25:02","updated_at"=>"2023-09-06 19:39:22"],
        //     ["id"=>"320","center_cost_id"=>"6","name"=>"6.3.2.1.3.3.2 Lubrificantes - Outros","code"=>"6.3.2.1.3.3.2","created_at"=>"2023-09-06 19:40:11","updated_at"=>"2023-09-06 19:40:11"],
        //     ["id"=>"321","center_cost_id"=>"6","name"=>"6.3.2.1.4 Ferramentas e utensilios de desgaste rapido","code"=>"6.3.2.1.4","created_at"=>"2023-09-06 19:41:07","updated_at"=>"2023-09-06 19:41:07"],
        //     ["id"=>"322","center_cost_id"=>"6","name"=>"6.3.2.1.5 Material de manutencao e reparacao","code"=>"6.3.2.1.5","created_at"=>"2023-09-06 19:42:23","updated_at"=>"2023-09-06 19:42:23"],
        //     ["id"=>"323","center_cost_id"=>"6","name"=>"6.3.2.1.5.1 Material de manutencao e reparacao - viaturas ligeiras de passageiros","code"=>"6.3.2.1.5.1","created_at"=>"2023-09-06 19:43:44","updated_at"=>"2023-09-06 19:43:44"],
        //     ["id"=>"324","center_cost_id"=>"6","name"=>"6.3.2.1.5.2 Material de manutencao e reparacao - Outros","code"=>"6.3.2.1.5.2","created_at"=>"2023-09-06 19:44:48","updated_at"=>"2023-09-06 19:44:48"],
        //     ["id"=>"325","center_cost_id"=>"6","name"=>"6.3.2.1.6 Material de escritorio","code"=>"6.3.2.1.6","created_at"=>"2023-09-06 19:45:20","updated_at"=>"2023-09-06 19:45:20"],
        //     ["id"=>"326","center_cost_id"=>"6","name"=>"6.3.2.1.7 Livros e documentos tecnica","code"=>"6.3.2.1.7","created_at"=>"2023-09-06 19:45:58","updated_at"=>"2023-09-06 19:45:58"],
        //     ["id"=>"327","center_cost_id"=>"6","name"=>"6.3.2.1.7 Livros e documentos tecnica","code"=>"6.3.2.1.7","created_at"=>"2023-09-06 19:49:04","updated_at"=>"2023-09-06 19:49:04"],
        //     ["id"=>"328","center_cost_id"=>"6","name"=>"6.3.2.1.8 Artigos para oferta","code"=>"6.3.2.1.8","created_at"=>"2023-09-06 19:49:45","updated_at"=>"2023-09-06 19:49:45"],
        //     ["id"=>"329","center_cost_id"=>"6","name"=>"6.3.2.2.1 Manutencao e reparacao","code"=>"6.3.2.2.1","created_at"=>"2023-09-06 19:51:10","updated_at"=>"2023-09-06 19:51:10"],
        //     ["id"=>"330","center_cost_id"=>"6","name"=>"6.3.2.2.2 Transporte de carga","code"=>"6.3.2.2.2","created_at"=>"2023-09-06 19:52:01","updated_at"=>"2023-09-06 19:52:01"],
        //     ["id"=>"331","center_cost_id"=>"6","name"=>"6.3.2.2.3 Transporte de pessoal","code"=>"6.3.2.2.3","created_at"=>"2023-09-06 19:52:30","updated_at"=>"2023-09-06 19:52:30"],
        //     ["id"=>"332","center_cost_id"=>"6","name"=>"6.3.2.2.4 Comunicacoes","code"=>"6.3.2.2.4","created_at"=>"2023-09-06 19:52:59","updated_at"=>"2023-09-06 19:52:59"],
        //     ["id"=>"333","center_cost_id"=>"6","name"=>"6.3.2.2.5 Honorarios","code"=>"6.3.2.2.5","created_at"=>"2023-09-06 19:53:22","updated_at"=>"2023-09-06 19:53:22"],
        //     ["id"=>"334","center_cost_id"=>"6","name"=>"6.3.2.2.6 Comissoes a intermediarios","code"=>"6.3.2.2.6","created_at"=>"2023-09-06 19:54:01","updated_at"=>"2023-09-06 19:54:01"],
        //     ["id"=>"335","center_cost_id"=>"6","name"=>"6.3.2.2.7 Piblicidade e propaganda","code"=>"6.3.2.2.7","created_at"=>"2023-09-06 19:54:35","updated_at"=>"2023-09-06 19:54:35"],
        //     ["id"=>"336","center_cost_id"=>"6","name"=>"6.3.2.2.7.1 Publicidades e propaganda - Campanhas publicitarias","code"=>"6.3.2.2.7.1","created_at"=>"2023-09-06 19:55:39","updated_at"=>"2023-09-06 19:55:39"],
        //     ["id"=>"337","center_cost_id"=>"6","name"=>"6.3.2.2.7.2 Publicidade e propaganda - Outros","code"=>"6.3.2.2.7.2","created_at"=>"2023-09-06 19:56:24","updated_at"=>"2023-09-06 19:56:24"],
        //     ["id"=>"338","center_cost_id"=>"6","name"=>"6.3.2.2.8.1 Deslocacoes e estadias - Em serviços","code"=>"6.3.2.2.8.1","created_at"=>"2023-09-06 19:57:37","updated_at"=>"2023-09-06 19:57:37"],
        //     ["id"=>"339","center_cost_id"=>"6","name"=>"6.3.2.2.8.2 Deslocacoes e estadias - Outras deslocacoes","code"=>"6.3.2.2.8.2","created_at"=>"2023-09-08 12:18:17","updated_at"=>"2023-09-08 12:18:17"],
        //     ["id"=>"340","center_cost_id"=>"6","name"=>"6.3.2.2.9 Despesas de representacao","code"=>"6.3.2.2.9","created_at"=>"2023-09-08 12:18:55","updated_at"=>"2023-09-08 12:18:55"],
        //     ["id"=>"341","center_cost_id"=>"6","name"=>"6.3.2.3.1 Contencioso e notariado","code"=>"6.3.2.3.1","created_at"=>"2023-09-08 12:20:22","updated_at"=>"2023-09-08 12:20:22"],
        //     ["id"=>"342","center_cost_id"=>"6","name"=>"6.3.2.3.2.1 Rendas e alugueres - locacao financeira","code"=>"6.3.2.3.2.1","created_at"=>"2023-09-08 12:21:44","updated_at"=>"2023-09-08 12:21:44"],
        //     ["id"=>"343","center_cost_id"=>"6","name"=>"6.3.2.3.3 Seguros","code"=>"6.3.2.3.3","created_at"=>"2023-09-08 12:22:28","updated_at"=>"2023-09-08 12:22:28"],
        //     ["id"=>"344","center_cost_id"=>"6","name"=>"6.3.2.3.3.1 Seguro de via, acidentes pesooais e doenças","code"=>"6.3.2.3.3.1","created_at"=>"2023-09-08 12:23:42","updated_at"=>"2023-09-08 12:23:42"],
        //     ["id"=>"345","center_cost_id"=>"6","name"=>"6.3.2.3.4 Royalties","code"=>"6.3.2.3.4","created_at"=>"2023-09-08 12:24:16","updated_at"=>"2023-09-08 12:24:16"],
        //     ["id"=>"346","center_cost_id"=>"6","name"=>"6.3.2.3.5 limpeza, higiene e conforto","code"=>"6.3.2.3.5","created_at"=>"2023-09-08 12:25:11","updated_at"=>"2023-09-08 12:25:11"],
        //     ["id"=>"347","center_cost_id"=>"6","name"=>"6.3.2.3.6 Vigilancia e seguranca","code"=>"6.3.2.3.6","created_at"=>"2023-09-08 12:25:45","updated_at"=>"2023-09-08 12:25:45"],
        //     ["id"=>"348","center_cost_id"=>"6","name"=>"6.3.2.3.7 Trabalhos especializados","code"=>"6.3.2.3.7","created_at"=>"2023-09-08 12:26:27","updated_at"=>"2023-09-08 12:26:27"],
        //     ["id"=>"349","center_cost_id"=>"6","name"=>"6.3.2.9.9 Outros fornecimentos e servicos","code"=>"6.3.2.9.9","created_at"=>"2023-09-08 12:26:56","updated_at"=>"2023-09-08 12:26:56"],
        //     ["id"=>"350","center_cost_id"=>"6","name"=>"6.4 AJUSTAMENTOS DO PERIODO","code"=>"6.4","created_at"=>"2023-09-08 12:27:29","updated_at"=>"2023-09-08 12:27:29"],
        //     ["id"=>"351","center_cost_id"=>"6","name"=>"6.4.1 Ajustamento de inventarios para o valor realizavel liquido","code"=>"6.4.1","created_at"=>"2023-09-08 12:28:15","updated_at"=>"2023-09-08 12:28:15"],
        //     ["id"=>"352","center_cost_id"=>"6","name"=>"6.4.2 Investimentos financeiros","code"=>"6.4.2","created_at"=>"2023-09-08 12:28:48","updated_at"=>"2023-09-08 12:28:48"],
        //     ["id"=>"353","center_cost_id"=>"6","name"=>"6.4.3 Activos tangiveis de investimentos","code"=>"6.4.3","created_at"=>"2023-09-08 12:29:25","updated_at"=>"2023-09-08 12:29:25"],
        //     ["id"=>"354","center_cost_id"=>"6","name"=>"6.4.4 Contas a receber","code"=>"6.4.4","created_at"=>"2023-09-08 12:29:51","updated_at"=>"2023-09-08 12:29:51"],
        //     ["id"=>"355","center_cost_id"=>"6","name"=>"6.4.4.1  Contas a receber ajustamento dentro dos limites fiscais","code"=>"6.4.4.1","created_at"=>"2023-09-08 12:30:48","updated_at"=>"2023-09-08 12:30:48"],
        //     ["id"=>"356","center_cost_id"=>"6","name"=>"6.4.4.1 Contas a receber - ajustamentos para alem dos limites fiscais","code"=>"6.4.4.1","created_at"=>"2023-09-08 12:31:41","updated_at"=>"2023-09-08 12:31:41"],
        //     ["id"=>"357","center_cost_id"=>"6","name"=>"6.5 AMORTIZAÇÕES DO PERIODO","code"=>"6.5","created_at"=>"2023-09-08 12:32:46","updated_at"=>"2023-09-08 12:32:46"],
        //     ["id"=>"358","center_cost_id"=>"6","name"=>"6.5.1 Activos tangiveis","code"=>"6.5.1","created_at"=>"2023-09-08 12:33:06","updated_at"=>"2023-09-08 12:33:06"],
        //     ["id"=>"359","center_cost_id"=>"6","name"=>"6.5.2 Activos intangiveis","code"=>"6.5.2","created_at"=>"2023-09-08 12:33:32","updated_at"=>"2023-09-08 12:33:32"],
        //     ["id"=>"360","center_cost_id"=>"6","name"=>"6.5.3 Activos tangiveis de investimento","code"=>"6.5.3","created_at"=>"2023-09-08 12:34:09","updated_at"=>"2023-09-08 12:34:09"],
        //     ["id"=>"361","center_cost_id"=>"6","name"=>"6.6 PREVISÕES DO PERIODO","code"=>"6.6","created_at"=>"2023-09-08 12:35:08","updated_at"=>"2023-09-08 12:35:08"],
        //     ["id"=>"362","center_cost_id"=>"6","name"=>"6.6.1  Processos judiciais em curso","code"=>"6.6.1","created_at"=>"2023-09-08 12:35:49","updated_at"=>"2023-09-08 12:35:49"],
        //     ["id"=>"363","center_cost_id"=>"6","name"=>"6.6.2 Acidentes no trabalho e doenças profissionais","code"=>"6.6.2","created_at"=>"2023-09-08 12:36:41","updated_at"=>"2023-09-08 12:36:41"],
        //     ["id"=>"364","center_cost_id"=>"6","name"=>"6.6.3 Impostos","code"=>"6.6.3","created_at"=>"2023-09-08 12:37:10","updated_at"=>"2023-09-08 12:37:10"],
        //     ["id"=>"365","center_cost_id"=>"6","name"=>"6.6.4 Restruturacao de negocios","code"=>"6.6.4","created_at"=>"2023-09-08 12:37:42","updated_at"=>"2023-09-08 12:37:42"],
        //     ["id"=>"366","center_cost_id"=>"6","name"=>"6.6.5 Contratos onerosos","code"=>"6.6.5","created_at"=>"2023-09-08 12:38:14","updated_at"=>"2023-09-08 12:38:42"],
        //     ["id"=>"367","center_cost_id"=>"6","name"=>"6.6.6 Garantias a clientes","code"=>"6.6.6","created_at"=>"2023-09-08 12:39:14","updated_at"=>"2023-09-08 12:39:14"],
        //     ["id"=>"368","center_cost_id"=>"6","name"=>"6.6.7 Perdas em contratos de construcao","code"=>"6.6.7","created_at"=>"2023-09-08 12:39:47","updated_at"=>"2023-09-08 12:39:47"],
        //     ["id"=>"369","center_cost_id"=>"6","name"=>"6.6.9 Outras provisoes","code"=>"6.6.9","created_at"=>"2023-09-08 12:40:09","updated_at"=>"2023-09-08 12:40:09"],
        //     ["id"=>"370","center_cost_id"=>"6","name"=>"6.8 OUTROS GASTOS E PERDAS OPERACIONAIS","code"=>"6.8","created_at"=>"2023-09-08 12:41:04","updated_at"=>"2023-09-08 12:41:04"],
        //     ["id"=>"371","center_cost_id"=>"6","name"=>"6.8.1 Despesas de investigacao","code"=>"6.8.1","created_at"=>"2023-09-08 12:41:33","updated_at"=>"2023-09-08 12:41:33"],
        //     ["id"=>"372","center_cost_id"=>"6","name"=>"6.8.2 Impostos e taxas","code"=>"6.8.2","created_at"=>"2023-09-08 12:41:57","updated_at"=>"2023-09-08 12:41:57"],
        //     ["id"=>"373","center_cost_id"=>"6","name"=>"6.8.2.1 Direitos aduaneiros","code"=>"6.8.2.1","created_at"=>"2023-09-08 12:42:32","updated_at"=>"2023-09-08 12:42:32"],
        //     ["id"=>"374","center_cost_id"=>"6","name"=>"6.8.2.2 Impostos sobre o valor acrescentado","code"=>"6.8.2.2","created_at"=>"2023-09-08 12:43:10","updated_at"=>"2023-09-08 12:43:10"],
        //     ["id"=>"375","center_cost_id"=>"6","name"=>"6.8.2.3 Imposto de selo","code"=>"6.8.2.3","created_at"=>"2023-09-08 12:43:33","updated_at"=>"2023-09-08 12:43:33"],
        //     ["id"=>"376","center_cost_id"=>"6","name"=>"6.8.2.4 Imposto sobre veiculos","code"=>"6.8.2.4","created_at"=>"2023-09-08 12:44:03","updated_at"=>"2023-09-08 12:44:03"],
        //     ["id"=>"377","center_cost_id"=>"6","name"=>"6.8.2.5 Impostos Autárquico","code"=>"6.8.2.5","created_at"=>"2023-09-08 12:44:49","updated_at"=>"2023-09-08 12:44:49"],
        //     ["id"=>"378","center_cost_id"=>"6","name"=>"6.8.3 Perdas em investimentos de capital","code"=>"6.8.3","created_at"=>"2023-09-08 12:45:28","updated_at"=>"2023-09-08 12:45:28"],
        //     ["id"=>"379","center_cost_id"=>"6","name"=>"6.8.3.1 Alienacao","code"=>"6.8.3.1","created_at"=>"2023-09-08 12:45:53","updated_at"=>"2023-09-08 12:45:53"],
        //     ["id"=>"380","center_cost_id"=>"6","name"=>"6.8.3.2 Abates","code"=>"6.8.3.2","created_at"=>"2023-09-08 12:53:28","updated_at"=>"2023-09-08 12:53:28"],
        //     ["id"=>"381","center_cost_id"=>"6","name"=>"6.8.3.3 Sinistros","code"=>"6.8.3.3","created_at"=>"2023-09-08 12:53:49","updated_at"=>"2023-09-08 12:53:49"],
        //     ["id"=>"382","center_cost_id"=>"6","name"=>"6.8.4.2 Quebras","code"=>"6.8.4.2","created_at"=>"2023-09-08 12:54:16","updated_at"=>"2023-09-08 12:54:16"],
        //     ["id"=>"383","center_cost_id"=>"6","name"=>"6.8.4.9 Outras","code"=>"6.8.4.9","created_at"=>"2023-09-08 12:54:41","updated_at"=>"2023-09-08 12:54:41"],
        //     ["id"=>"384","center_cost_id"=>"6","name"=>"6.8.9 Outros gastos operacionais","code"=>"6.8.9","created_at"=>"2023-09-08 12:55:12","updated_at"=>"2023-09-08 12:55:12"],
        //     ["id"=>"385","center_cost_id"=>"6","name"=>"6.8.9.1 Quotizacoes","code"=>"6.8.9.1","created_at"=>"2023-09-08 12:55:55","updated_at"=>"2023-09-08 12:55:55"],
        //     ["id"=>"386","center_cost_id"=>"6","name"=>"6.8.9.2 Despesas confidenciais","code"=>"6.8.9.2","created_at"=>"2023-09-08 12:56:35","updated_at"=>"2023-09-08 12:56:35"],
        //     ["id"=>"387","center_cost_id"=>"6","name"=>"6.9.9.3 Ofertas e amostras de inventarios","code"=>"6.9.9.3","created_at"=>"2023-09-08 12:57:15","updated_at"=>"2023-09-08 12:57:15"],
        //     ["id"=>"388","center_cost_id"=>"6","name"=>"6.8.9.4 Programas de responsabilidades  social","code"=>"6.8.9.4","created_at"=>"2023-09-08 12:58:07","updated_at"=>"2023-09-08 12:58:07"],
        //     ["id"=>"389","center_cost_id"=>"6","name"=>"6.8.9.5 Donativos","code"=>"6.8.9.5","created_at"=>"2023-09-08 12:58:36","updated_at"=>"2023-09-08 12:58:36"],
        //     ["id"=>"390","center_cost_id"=>"6","name"=>"6.8.9.5.1 Donativos ao estado","code"=>"6.8.9.5.1","created_at"=>"2023-09-08 12:59:02","updated_at"=>"2023-09-08 12:59:02"],
        //     ["id"=>"391","center_cost_id"=>"6","name"=>"6.8.9.5.2 Outros donativos no ambito do Mecenato","code"=>"6.8.9.5.2","created_at"=>"2023-09-08 13:00:12","updated_at"=>"2023-09-08 13:00:12"],
        //     ["id"=>"392","center_cost_id"=>"6","name"=>"6.8.9.6 Multas e penalidades","code"=>"6.8.9.6","created_at"=>"2023-09-08 13:00:43","updated_at"=>"2023-09-08 13:00:43"],
        //     ["id"=>"393","center_cost_id"=>"6","name"=>"6.8.9.9 Outros","code"=>"6.8.9.9","created_at"=>"2023-09-08 13:01:06","updated_at"=>"2023-09-08 13:01:06"],
        //     ["id"=>"394","center_cost_id"=>"6","name"=>"6.9 GASTOS E PERDAS FINANCEIROS","code"=>"6.9","created_at"=>"2023-09-08 13:01:37","updated_at"=>"2023-09-08 13:01:37"],
        //     ["id"=>"395","center_cost_id"=>"6","name"=>"6.9.1 Juros suportados","code"=>"6.9.1","created_at"=>"2023-09-08 13:02:03","updated_at"=>"2023-09-08 13:02:03"],
        //     ["id"=>"396","center_cost_id"=>"6","name"=>"6.9.1.1 Empréstimos bancários","code"=>"6.9.1.1","created_at"=>"2023-09-08 13:02:59","updated_at"=>"2023-09-08 13:02:59"],
        //     ["id"=>"397","center_cost_id"=>"6","name"=>"6.9.1.3 Empréstimos sócios, acionistas ou proprietarios","code"=>"6.9.1.3","created_at"=>"2023-09-08 13:03:45","updated_at"=>"2023-09-08 13:04:37"],
        //     ["id"=>"398","center_cost_id"=>"6","name"=>"6.9.1.4 Outros emprestimos","code"=>"6.9.1.4","created_at"=>"2023-09-08 13:05:14","updated_at"=>"2023-09-08 13:05:14"],
        //     ["id"=>"399","center_cost_id"=>"6","name"=>"6.9.1.5 Desconto de titulos","code"=>"6.9.1.5","created_at"=>"2023-09-08 13:05:58","updated_at"=>"2023-09-08 13:05:58"],
        //     ["id"=>"400","center_cost_id"=>"6","name"=>"6.9.1.6 Juros de mora e compensatorios","code"=>"6.9.1.6","created_at"=>"2023-09-08 13:06:46","updated_at"=>"2023-09-08 13:06:46"],
        //     ["id"=>"401","center_cost_id"=>"6","name"=>"6.9.1.6.1 Juro de mora","code"=>"6.9.1.6.1","created_at"=>"2023-09-08 13:07:15","updated_at"=>"2023-09-08 13:07:15"],
        //     ["id"=>"402","center_cost_id"=>"6","name"=>"6.9.4 Diferencas de cambios desfavoraveis","code"=>"6.9.4","created_at"=>"2023-09-08 13:07:48","updated_at"=>"2023-09-08 13:07:48"],
        //     ["id"=>"403","center_cost_id"=>"6","name"=>"6.9.4.1 Realizadas","code"=>"6.9.4.1","created_at"=>"2023-09-08 13:08:08","updated_at"=>"2023-09-08 13:08:08"],
        //     ["id"=>"404","center_cost_id"=>"6","name"=>"6.9.4.2 Não realizadas","code"=>"6.9.4.2","created_at"=>"2023-09-08 13:08:46","updated_at"=>"2023-09-08 13:08:46"],
        //     ["id"=>"405","center_cost_id"=>"6","name"=>"6.9.5 Descontos de prontos pagamento concebidos","code"=>"6.9.5","created_at"=>"2023-09-08 13:09:33","updated_at"=>"2023-09-08 13:09:33"],
        //     ["id"=>"406","center_cost_id"=>"6","name"=>"6.9.8 Outros gastos e perdas financeiros","code"=>"6.9.8","created_at"=>"2023-09-08 13:10:17","updated_at"=>"2023-09-08 13:10:17"],
        //     ["id"=>"407","center_cost_id"=>"6","name"=>"6.9.8.1  Serviço bancários","code"=>"6.9.8.1","created_at"=>"2023-09-08 13:11:05","updated_at"=>"2023-09-08 13:11:05"],
        //     ["id"=>"408","center_cost_id"=>"6","name"=>"6.9.8.9 Deversos não especificados","code"=>"6.9.8.9","created_at"=>"2023-09-08 13:11:57","updated_at"=>"2023-09-08 13:11:57"]
        // ]);



        // DB::table('load_unities')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Kilogramas',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Toneladas',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        // ]);

        // DB::table('coins')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'USD',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'EURO',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'MZN',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],

        //     [
        //         'id'=>4,
        //         'name'=>'ZAR',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        // ]);

        // DB::table('distance_controls')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Hodômetro',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Horímetro',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        // ]);

        

        // DB::table('task_mcscr_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Pausado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Terminado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Em Execução',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Programado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        // ]);

        
        // DB::table('type_sub_tasks')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Não / Sim',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Mau / Bom / Excelente',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Texto',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
        // ]);

        // DB::table('frequencies')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Dia(s)',
        //         'days'=>1,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Semana(s)',
        //         'days'=>7,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Meses',
        //         'days'=>30,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],

        //     [
        //         'id'=>4,
        //         'name'=>'Ano(s)',
        //         'days'=>365,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Odômetro',
        //         'days'=>0,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>6,
        //         'name'=>'Horímetro',
        //         'days'=>0,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
        // ]);

        // DB::table('equipment_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Disponível',
        //         'mobilized'=>'Operacional',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Indisponível',
        //         'mobilized'=>'Operacional',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Indisponível',
        //         'mobilized'=>'Não Operacional',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
        // ]);


        // DB::table('acquisitions')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Novo',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Usado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
            
         
        // ]);

        /** */


        DB::table('users')->insert([
            [
                'id'=>1,
                'first_name'=>'Admin',
                'last_name'=>'Geral',
                'code'=>'0000',
                'mobile'=>'842648618',
                'user_status_id'=>1,
                'role_id'=>1,
                'email'=>'admin@test.com',
                'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            // [
            //     'id'=>2,
            //     'firstName'=>'Admin',
            //     'lastName'=>'Manutencao',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>2,
            //     'account_status_id'=>1,
            //     'email'=>'admin.manutencao@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>3,
            //     'firstName'=>'Gestor',
            //     'lastName'=>'Manutencao',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>3,
            //     'account_status_id'=>1,
            //     'email'=>'gestor.manutencao@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>4,
            //     'firstName'=>'Operador',
            //     'lastName'=>'Manutencao',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>4,
            //     'account_status_id'=>1,
            //     'email'=>'operador.manutencao@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>5,
            //     'firstName'=>'Admin',
            //     'lastName'=>'Stock',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>11,
            //     'account_status_id'=>1,
            //     'email'=>'admin.stock@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>6,
            //     'firstName'=>'Gestor',
            //     'lastName'=>'Stock',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>12,
            //     'account_status_id'=>1,
            //     'email'=>'gestor.stock@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>7,
            //     'firstName'=>'Operador',
            //     'lastName'=>'Stock',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>13,
            //     'account_status_id'=>1,
            //     'email'=>'operador.stock@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>8,
            //     'firstName'=>'Admin',
            //     'lastName'=>'Operacao',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>14,
            //     'account_status_id'=>1,
            //     'email'=>'admin.operacao@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>9,
            //     'firstName'=>'Gestor',
            //     'lastName'=>'Operacao',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>15,
            //     'account_status_id'=>1,
            //     'email'=>'gestor.operacao@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
            // [
            //     'id'=>10,
            //     'firstName'=>'Operador',
            //     'lastName'=>'Operacao',
            //     'address'=>'Mozambique Beira',
            //     'code'=>'0000',
            //     'bi'=>'0000',
            //     'cellphone'=>'842648618',
            //     'mobile'=>'842648618',
            //     'signature'=>'/files/img/sys/default_signature.png',
            //     'country_id'=>1,
            //     'province_id'=>1,
            //     'city_id'=>1,
            //     'user_status_id'=>1,
            //     'role_id'=>16,
            //     'account_status_id'=>1,
            //     'email'=>'operador.operacao@test.com',
            //     'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            //     'created_at'=>now(),
            //     'updated_at'=>now()
            // ],
         
        ]);


        // DB::table('company_configs')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'INOVATIS MZ LTD',
        //         'image'=>'/files/img/sys/image.png',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
        // ]);

        // DB::table('mcscr_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Terminado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Aguarda Aprovação',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Em Execução',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Pendente',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Em diagnostico',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
         
        // ]);

        

        // DB::table('waiting_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Aguarda Peça',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Aguarda Técnico',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Acidente',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Nenhum',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        // ]);

      

        // DB::table('account_statuses')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Ativado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Desativado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ]
        // ]);

        
        DB::table('user_statuses')->insert([
            [
                'id'=>1,
                'name'=>'Ativado',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'name'=>'Desativado',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);


        // DB::table('countries')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Mozambique',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ]
        // ]);

        // DB::table('criticalies')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Muito Alto',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Alto',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Médio',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Baixo',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Muito Baixo',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],

        // ]);

        DB::table('roles')->insert([
            [
                'id'=>1,
                'name'=>'Administrador',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'name'=>'Gestor',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'name'=>'Operador',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

        ]);

        // DB::table('provinces')->insert([
        //     [
        //         'id' =>1,
        //         'country_id'=>1,
        //         'name' => 'Maputo Cidade',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>2,
        //         'country_id'=>1,
        //         'name' => 'Maputo Província',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>3,
        //         'country_id'=>1,
        //         'name' => 'Inhambane',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>4,
        //         'country_id'=>1,
        //         'name' => 'Gaza',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>5,
        //         'country_id'=>1,
        //         'name' => 'Sofala',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>6,
        //         'country_id'=>1,
        //         'name' => 'Manica',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>7,
        //         'country_id'=>1,
        //         'name' => 'Tete',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>8,
        //         'country_id'=>1,
        //         'name' => 'Zambézia',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>9,
        //         'country_id'=>1,
        //         'name' => 'Nampula',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>10,
        //         'country_id'=>1,
        //         'name' => 'Cabo Delgado',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id' =>11,
        //         'country_id'=>1,
        //         'name' => 'Niassa',
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //    ]);

        //    DB::table('cities')->insert([
        //     [
        //         'id'=>1,
        //         'name'=>'Maputo',
        //         'province_id'=>1,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>2,
        //         'name'=>'Matola',
        //         'province_id'=>2,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>3,
        //         'name'=>'Nampula',
        //         'province_id'=>9,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>4,
        //         'name'=>'Beira',
        //         'province_id'=>5,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>5,
        //         'name'=>'Chimoio',
        //         'province_id'=>6,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>6,
        //         'name'=>'Quelimane',
        //         'province_id'=>8,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>7,
        //         'name'=>'Nacala',
        //         'province_id'=>9,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>8,
        //         'name'=>'Mocuba',
        //         'province_id'=>8,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>9,
        //         'name'=>'Tete',
        //         'province_id'=>7,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>10,
        //         'name'=>'Gurué',
        //         'province_id'=>8,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>11,
        //         'name'=>'Lichinga',
        //         'province_id'=>11,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>12,
        //         'name'=>'Pemba',
        //         'province_id'=>10,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>13,
        //         'name'=>'Xai-Xai',
        //         'province_id'=>4,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>14,
        //         'name'=>'Maxixe',
        //         'province_id'=>3,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>15,
        //         'name'=>'Angoche',
        //         'province_id'=>9,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>16,
        //         'name'=>'Cuamba',
        //         'province_id'=>11,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>17,
        //         'name'=>'Montepuez',
        //         'province_id'=>10,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>18,
        //         'name'=>'Dondo',
        //         'province_id'=>5,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>19,
        //         'name'=>'Inhambane',
        //         'province_id'=>3,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>20,
        //         'name'=>'Chibuto',
        //         'province_id'=>4,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>21,
        //         'name'=>'Chócue',
        //         'province_id'=>4,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>22,
        //         'name'=>'Ilha de Moçambique',
        //         'province_id'=>9,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>23,
        //         'name'=>'Manica',
        //         'province_id'=>6,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>24,
        //         'name'=>'Moatiza',
        //         'province_id'=>7,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        //     [
        //         'id'=>25,
        //         'name'=>'Vilanculos',
        //         'province_id'=>3,
        //         'created_at'=>now(),
        //         'updated_at'=>now()
        //     ],
        // ]);
    }
}
