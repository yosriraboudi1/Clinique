<?PHP
	class produit
    {
		private  $id = null;
		private  $libelle = null;
		private  $nb_calories= null;
		private  $description = null;
		private  $prix = null;
		private    $categorie = null;	
		private  $img = null;	
		function __construct( string $libelle, float $nb_calories, int $prix,string $description,string $categorie, string $img)
        {
			$this->libelle=$libelle;
			$this->nb_calories=$nb_calories;
			$this->description=$description;
			$this->prix=$prix;
			$this->categorie=$categorie;
			$this->img=$img;
		}
		function getId(): int{
			return $this->id;
		}
		function getImg(): string{
			return $this->img;
		}
		function getLibelle(): string{
			return $this->libelle;
		}
		function getNb_calories(): float{
			return $this->nb_calories;
		}
		function getDescription(): string{
			return $this->description;
		}
		function getprix(): int{
			return $this->prix;
		}
		function getCategorie(): string{
			return $this->categorie;
		}
		function setlibelle(string $libelle): void
        {
			$this->libelle=$libelle;
		}
		function setImg(string $img): void
        {
			$this->img=$img;
		}
		function setNb_calories(float $nb_calories): void
        {
			$this->nb_calories=$nb_calories;
		}
		function setDescription(string $description): void
        {
			$this->description=$description;
		}
		function setprix(int $prix): void
        {
			$this->prix=$prix;
		}
		function setCategorie(string $categorie): void
        {
			$this->categorie=$categorie;
		}
		
    }
?>