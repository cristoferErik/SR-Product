<?php
    class product{
        private $id;
        private $name;
        private $type;
        private $regular_price;
        private $description;
        private $short_description;
        private $categories=[];
        private $images=[];


    
        public function __construct($name=null ,$type=null ,$regular_price=null ,$description=null ,$short_description=null ,$categories=null ,$images=null )
        {
            $this->name = $name;
            $this->type = $type;
            $this ->regular_price =$regular_price;
            $this->description=$description;
            $this->short_description=$short_description;
            $this->categories=$categories;
            $this->images=$images;
        }

        public function getAtributtes(){
            $attributes=['id','name','type','regular_price',
                        'description','short_description',
                        'categories','images'];
            return $attributes;
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of type
         */
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         */
        public function setType($type): self
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of regular_price
         */
        public function getRegularPrice()
        {
                return $this->regular_price;
        }

        /**
         * Set the value of regular_price
         */
        public function setRegularPrice($regular_price): self
        {
                $this->regular_price = $regular_price;

                return $this;
        }

        /**
         * Get the value of description
         */
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         */
        public function setDescription($description): self
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of short_description
         */
        public function getShortDescription()
        {
                return $this->short_description;
        }

        /**
         * Set the value of short_description
         */
        public function setShortDescription($short_description): self
        {
                $this->short_description = $short_description;

                return $this;
        }

        /**
         * Get the value of categories
         */
        public function getCategories()
        {
                return $this->categories;
        }

        /**
         * Set the value of categories
         */
        public function setCategories($categories): self
        {
                $this->categories = $categories;

                return $this;
        }

        /**
         * Get the value of images
         */
        public function getImages()
        {
                return $this->images;
        }

        /**
         * Set the value of images
         */
        public function setImages($images): self
        {
                $this->images = $images;

                return $this;
        }
    }
?>
