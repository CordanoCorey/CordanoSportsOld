//
//  ScoreboardViewController.h
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/18/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface GamesViewController : UIViewController

@property (weak, nonatomic) IBOutlet UIBarButtonItem *sidebarButton;

@property (nonatomic, readwrite, weak) IBOutlet UITextField *textField;

-(IBAction)go: (id)sender;


@end
