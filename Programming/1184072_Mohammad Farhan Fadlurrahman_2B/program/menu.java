import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class menu here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class menu extends World
{
    

    /**
     * Constructor for objects of class menu.
     * 
     */
    public menu()
    {    
        // Create a new world with 600x400 cells with a cell size of 1x1 pixels.
        super(950, 600, 1); 
        prepare();
        setBackground("menu.jpg");
    }

    public void prepare()
    {

        play play = new play();
        addObject(play,155,500);

        howtoplay howtoplay = new howtoplay();
        addObject(howtoplay,475,500);
        
        about about = new about();
        addObject(about,790,500);
    }

   
}  

