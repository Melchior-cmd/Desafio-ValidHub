<?php

namespace App\Application\Interfaces\Cartorios;

use App\Application\Validates\Arquivos\FileValidate;
use App\Models\Cartorios;
use Illuminate\Database\Eloquent\Collection;
use stdClass;
use SimpleXMLElement;

interface ICartoriosService
{
    /**
     * @return Collection
     */
    public function listCartorios() : Collection;

    /**
     * @param stdClass $params
     * @return Cartorios
     */
    public function createCartorio(stdClass $params) : Cartorios;

    /**
     * @param SimpleXMLElement $params
     * @return Cartorios
     */
    public function cargaXML(SimpleXMLElement $params) : Cartorios;

    /**
     * @param Cartorios $cartorio
     * @return Cartorios
     */
    public function getCartorioById(Cartorios $cartorio) : Cartorios;

    /**
     * @param string $email
     * @return Cartorios
     */
    public function getCartorioByEmail(string $email): Cartorios;

    /**
     * @param Cartorios $cartorio
     * @param stdClass $params
     * @return Cartorios
     */
    public function updateCartorio(Cartorios $cartorio, stdClass $params) : Cartorios;

    /**
     * @param Cartorios $cartorio
     * @return Cartorios
     */
    public function activeCartorio(Cartorios $cartorio) : Cartorios;

    /**
     * @param Cartorios $cartorio
     * @return Cartorios
     */
    public function inactiveCartorio(Cartorios $cartorio) : Cartorios;

    /**
     * @return FileValidate
     */
    public function getArquivoValidate() : FileValidate;
}
