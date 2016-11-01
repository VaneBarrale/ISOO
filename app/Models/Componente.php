<?php  

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
	protected $table = "Componentes";
	public $timestamps = false;

	public function getId()
    {
        return $this->Id;
    }

    public function getIdBien()
    {
    	return $this->IdBien;
    }

    public function getDescripcion()
    {
        return $this->name;
    }

    public function setDescripcion($descripcion)
    {
        $this->name = $name;
    }

    public function getImporte()
    {
        return $this->author;
    }

    public function setImporte($importe)
    {
        $this->author = $author;
    }

}

