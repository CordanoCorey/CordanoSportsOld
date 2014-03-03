//
//  ScoreboardViewController.m
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/18/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import "GamesViewController.h"
#import "LibraryAPI.h"
#import "SWRevealViewController.h"

@interface GamesViewController ()

@end

@implementation GamesViewController

@synthesize textField=_textField;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    // Change button color
    _sidebarButton.tintColor = [UIColor colorWithWhite:0.1f alpha:0.9f];
    
    // Set the side bar button action. When it's tapped, it'll show up the sidebar.
    _sidebarButton.target = self.revealViewController;
    _sidebarButton.action = @selector(revealToggle:);
    
    // Set the gesture
    [self.view addGestureRecognizer:self.revealViewController.panGestureRecognizer];
	
}

- (IBAction)go:(id)sender
{
    [self.textField resignFirstResponder];
    
    NSString *s = [NSString stringWithFormat:@"Hello, %@!", self.textField.text];
    UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Hello"
                                                    message:s
                                                   delegate:nil
                                          cancelButtonTitle:@"Thanks!"
                                          otherButtonTitles:nil];
    [alert show];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
